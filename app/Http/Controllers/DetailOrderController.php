<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeatPackage;

class DetailOrderController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = MeatPackage::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();
        return view('pages.detail_produk', [
            'item' => $item
        ]);
    }
}
