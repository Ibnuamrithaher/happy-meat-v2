<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPackage;
use Illuminate\Http\Request;

class DetailArtikelController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = ArtikelPackage::with(['artikel_galleries'])
                    ->where('slug', $slug)
                    ->firstOrFail();
        return view('pages.detail_artikel',[
            'item' => $item
        ]);
    }
}
