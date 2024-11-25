<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // dd(isset(auth()->user()->id));
        // dd(auth()->user());
        if (!auth()->check()) {
            $items = MeatPackage::with(['galleries'])->get();
            $latest_product = MeatPackage::latest()->get();
        } else {
            $items = MeatPackage::whereNotIn('user_id', [auth()->user()->id])->with(['galleries'])->get();
            $latest_product = MeatPackage::whereNotIn('user_id', [auth()->user()->id])->latest()->get();
        }

        return view('pages.produk', [
            'items' => $items,
            'latest_product' => $latest_product,
        ]);
    }
}
