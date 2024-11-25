<?php

namespace App\Http\Controllers\Suplayer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeatPackage;
use App\Http\Requests\Admin\MeatPackageRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SuplayerMeatPackageController extends Controller
{
    public function index(Request $request)
    {
        $items = MeatPackage::where('user_id', auth()->user()->id)->paginate(5);
        return view('pages.suplayer.meat-package.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.suplayer.meat-package.create');
    }

    public function store(MeatPackageRequest $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'price' => 'required',
            'about' => 'required'
        ], [
            'title.required' => 'Title tidak boleh kosong !',
            'type.required' => 'type tidak boleh kosong !',
            'price.required' => 'price tidak boleh kosong !',
            'about.required' => 'about tidak boleh kosong !',
        ]);
        if ($request->file('patch')) {
            $patch = Storage::disk('public')->put('upload', $request->file('patch'));
        } else {
            return redirect()->back()->withErrors("Gambar Harus di isi !");
        }
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = auth()->user()->id;
        $data['patch'] = $patch;

        MeatPackage::create($data);
        return redirect()->route('suplayer.meat-package.index');
    }

    public function edit($id)
    {
        $item = MeatPackage::findOrFail($id);
        if ($item->user_id != auth()->user()->id) {
            abort(403, 'You do not have permission to access this page.');
        }

        return view('pages.suplayer.meat-package.edit', [
            'item' => $item
        ]);
    }

    public function update(MeatPackageRequest $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'price' => 'required',
            'about' => 'required'
        ], [
            'title.required' => 'Nama Tidak Boleh Kosong !',
            'type.required' => 'type tidak boleh kosong !',
            'price.required' => 'price tidak boleh kosong !',
            'about.required' => 'about tidak boleh kosong !',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = MeatPackage::findOrFail($id);
        $data['status'] = 'pendding';
        $item->update($data);
        return redirect()->route('suplayer.meat-package.index');
    }

    public function destroy($id)
    {
        $item = MeatPackage::findOrFail($id);
        if ($item->user_id != auth()->user()->id) {
            abort(403, 'You do not have permission to access this page.');
        }
        $item->delete();

        return redirect()->route('suplayer.meat-package.index');
    }
}
