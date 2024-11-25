<?php

namespace App\Http\Controllers;

use App\Mail\TransactionSuccess;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function notificationHandler(){
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        //Buat instance midtrans notification
        $notification = new Notification();

        //Pecah order ID supaya bisa dibaca oleh database
        $order = explode('-', $notification->order_id);

        //Assign ke Variable untuk memudahkan ngoding
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $order[1];

        //Cari transaction berdasarkan ID
        $transaction = Transaction::findOrFail($order_id);

        //Handle notification status midtrans
        if($status === 'capture'){
            if($type === 'credit_card'){
                if($fraud === 'challenge'){
                    $transaction->transaction_status = 'CHALLENGE';
                } else {
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        }
        else if($status === 'settlement'){
            $transaction->transaction_status = 'SUCCESS';
        }
        else if($status === 'pending'){
            $transaction->transaction_status = 'PENDING';
        }
        else if($status === 'deny'){
            $transaction->transaction_status = 'FAILED';
        }
        else if($status === 'expire'){
            $transaction->transaction_status = 'EXPIRED';
        }
        else if($status === 'cancle'){
            $transaction->transaction_status = 'FAILED';
        }

        //Simpan transaksi
        $transaction->save();

        //Kirimkan email
        if($transaction){
            if($status === 'capture' && $fraud === 'accept'){
                mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            else if($status === 'settlement'){
                mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            else if($status === 'success'){
                mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            else if($status === 'capture' && $fraud === 'challenge'){
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Mindtrans payment Challenge'
                    ]
                    ]);
            }
            else {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Mindtrans payment not settlement'
                    ]
                    ]);
            }
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Mindtrans notification success'
                    ]
                    ]);
        }
    }

    public function finishRedirect(){
        return view('pages.success');
    }

    public function unfinishRedirect(){
        return view('pages.unfinish');
    }

    public function errorRedirect(){
        return view('pages.failed');
    }
}
