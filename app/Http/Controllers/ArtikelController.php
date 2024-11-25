<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPackage;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $items = ArtikelPackage::with(['artikel_galleries'])->get();
        return view('pages.artikel',[
            'items' => $items,
            'latest_article' => ArtikelPackage::latest()->get(),
        ]);
    }
}
