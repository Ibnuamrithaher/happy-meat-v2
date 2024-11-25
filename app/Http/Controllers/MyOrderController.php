<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyOrderController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $items = Transaction::where('users_id', $user_id)->get();

        return view('pages.myorder', [
            'items' => $items
        ]);
    }

    public function cek_status_pembayaran($id)
    {
        $transaction = Transaction::findOrFail($id);
        $serverKey = "SB-Mid-server-jSeiNgXM8_qfToMRW1Lbr4f9";
        $authString = base64_encode($serverKey . ":");
        // dd($authString);
        $url = "https://api.sandbox.midtrans.com/v2/{$transaction->order_id}/status";

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . $authString,
        ])->get($url);

        if ($response->successful()) {
            $data = $response->json();
            // dd($data->transaction_status);
            $transaction->transaction_status = strtoupper($data['transaction_status']);
            $transaction->save();
        } else {
            // Tangani kesalahan
            $statusCode = $response->status();
            $errorBody = $response->body();
            dd($errorBody);
        }

        if ($transaction->transaction_status == 'PENDING') {
            return redirect()->route('my-order')->withErrors('Anda Belum melakukan pembayaran virtual account segera lakukan pembayaran agar pesanan anda segera di prosses !');
        } else {
            return redirect()->route('my-order')->withSuccess('Status pembayaran anda telah di perbaharui !');
        }
    }
}
