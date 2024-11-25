<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArtikelGalleryRequest;
use App\Models\ArtikelGallery;
use App\Models\ArtikelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ArtikelGallery::with(['artikel_package'])->get();

        return view('pages.admin.artikel-gallery.index',[
            'items' =>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel_packages = ArtikelPackage::all();
        return view('pages.admin.artikel-gallery.create', [
            'artikel_packages' => $artikel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtikelGalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        ArtikelGallery::create($data);
        return redirect()->route('artikel-gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = ArtikelGallery::findOrFail($id);
        $artikel_packages = ArtikelPackage::all();

        return view('pages.admin.artikel-gallery.edit', [
            'item' => $item,
            'artikel_packages' => $artikel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtikelGalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $item = ArtikelGallery::findOrFail($id);

        $item->update($data);
        return redirect()->route('artikel-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ArtikelGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('artikel-gallery.index');
    }
}