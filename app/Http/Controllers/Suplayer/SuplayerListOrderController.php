<?php

namespace App\Http\Controllers\Suplayer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class SuplayerListOrderController extends Controller
{

    public function index(Request $request)
    {
        $items = Transaction::where('vendor_id', auth()->user()->id)->with([
            'details',
            'meat_package',
            'user'
        ])->get();

        return view('pages.suplayer.transaction.index', [
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Transaction::with([
            'details',
            'meat_package',
            'user'
        ])->findOrFail($id);

        return view('pages.suplayer.transaction.detail', [
            'item' => $item
        ]);
    }
}
