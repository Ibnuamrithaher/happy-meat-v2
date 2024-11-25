<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MeatPackageRequest;
use App\Models\MeatPackage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MeatPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = MeatPackage::paginate(5);


        return view('pages.admin.meat-package.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.meat-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MeatPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        MeatPackage::create($data);
        return redirect()->route('meat-package.index');
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
        $item = MeatPackage::findOrFail($id);

        return view('pages.admin.meat-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MeatPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = MeatPackage::findOrFail($id);

        $item->update($data);
        return redirect()->route('meat-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = MeatPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('meat-package.index');
    }

    public function aprove_meat_package($id)
    {
        $item = MeatPackage::findOrFail($id);
        $item->status = 'aproved';
        $item->save();
        return redirect()->back()->withSuccess('Produk Berhasil di terima');
    }


    public function denied_meat_package($id)
    {
        $item = MeatPackage::findOrFail($id);
        $item->status = 'denied';
        $item->save();
        return redirect()->back()->withSuccess('Produk Berhasil di tolak');
    }
}
