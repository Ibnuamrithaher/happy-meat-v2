<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function index(Request $request)
    {
        $items = User::whereNotIn('roles', ['USER', 'ADMIN'])->paginate(2);
        return view('pages.admin.partnership', compact('items'));
    }

    public function ajukan()
    {
        Auth::user()->roles = 'MITRA';
        Auth::user()->save();

        return redirect()->back();
    }

    public function terima($id)
    {
        $user = User::findOrFail($id);
        $user->roles = 'VENDOR';
        $user->save();
        return redirect()->route('partnership.index')->withSuccess('Partnership berhasil di setujui !');
    }

    public function tolak($id)
    {
        $user = User::findOrFail($id);
        $user->roles = 'USER';
        $user->save();
        return redirect()->route('partnership.index')->withSuccess('Partnership berhasil di tolak !');
    }
}
