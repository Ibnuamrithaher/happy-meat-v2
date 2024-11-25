<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;
use App\Http\Controllers\validate;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\MeatPackage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Midtrans\Config;
use Midtrans\Snap;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'meat_package', 'user'])->where('id', $id)->findOrFail($id);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-jSeiNgXM8_qfToMRW1Lbr4f9';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $item->meat_package->price + 20000,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'last_name' => '-',
                'email' => auth()->user()->email,
                'phone' => '0',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('pages.checkout', [
            'item' => $item,
            'snapToken' => $snapToken
        ]);
    }

    public function process(Request $request, $id)
    {
        $meat_package = MeatPackage::findOrFail($id);

        $transaction = Transaction::create([
            'meat_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'vendor_id' => $meat_package->user_id,
            'ongkir' => 20000,
            'transaction_total' => $meat_package->price,
            'transaction_status' => 'IN_CART',

        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'address' => Auth::user()->address
        ]);
        return redirect()->route('checkout', $transaction->id);
    }


    public function remove(Request $request, $detail_id) {}

    public function create(Request $request, $id) {}

    public function success(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $result = json_decode($request->result);
            $transaction = Transaction::with([
                'details',
                'meat_package.galleries',
                'user'
            ])->findOrFail($id);
            $transaction->transaction_status = 'PENDING';
            $transaction->bank = strtoupper($result->va_numbers[0]->bank);
            $transaction->va = $result->va_numbers[0]->va_number;
            $transaction->order_id = $result->order_id;
            $transaction->save();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }

        DB::commit();




        // //Set konfigurasi midtrans
        // Config::$serverKey = config('midtrans.serverKey');
        // Config::$isProduction = config('midtrans.isProduction');
        // Config::$isSanitized = config('midtrans.isSanitized');
        // Config::$is3ds = config('midtrans.is3ds');

        // //Buat array yang dikirim ke midtrans
        // $midtrans_params = [
        //     'transaction_details' => [
        //         'order_id' => 'TEST-' . $transaction->id,
        //         'gross_amount' => (int) $transaction->transaction_total + 20000
        //     ],
        //     'customer_details' => [
        //         'first_name' => $transaction->user->name,
        //         'email' => $transaction->user->email,
        //     ],
        //     'enabled_payments' => ['gopay'],
        //     'vtweb' => []
        // ];

        // try {
        //     //Ambil halaman payment di midtrans
        //     $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;

        //     //Redirect ke halaman midtrans
        //     header('Location: ' . $paymentUrl);
        // } catch (Exception $e) {
        //     echo $e->getMessage();
        // }


        // kirim email e-ticket ke user
        // Mail::to($transaction->user)->send(
        //     new TransactionSuccess($transaction)
        // );

        return view('pages.success', compact('transaction'));
    }
}
