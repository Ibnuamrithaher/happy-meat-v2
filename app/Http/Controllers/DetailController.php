<?php

namespace App\Http\Controllers;

use App\Models\MeatPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
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
