<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WithDrawController extends Controller
{
    public function index(Request $request)
    {
        $items = Withdraw::paginate(5);
        return view('pages.admin.withdraw', compact('items'));
    }

    public function tolak($id)
    {
        $item = Withdraw::findOrFail($id);
        if (auth()->user()->roles != 'ADMIN') {
            return abort(403, 'Tidak memiliki hak akses !');
        }
        $item->status = 'denied';
        $item->save();
        return redirect()->back()->withSuccess('Pengajuan widthdraw berhasil ditolak !');
    }

    public function terima(Request $request)
    {
        $data = Withdraw::findOrFail($request->item_id);
        if ($request->file('patch')) {
            $patch = Storage::disk('public')->put('upload', $request->file('patch'));
        } else {
            return redirect()->back()->withErrors("Bukti transfer harus di isi !");
        }
        $data->patch = $patch;
        $data->status = "approve";
        $data->save();

        return redirect()->back()->withSuccess("Suksses Transaksi withdraw");
    }
}
