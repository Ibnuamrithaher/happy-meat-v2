<?php

namespace App\Http\Controllers\Suplayer;

use App\Http\Controllers\Controller;
use App\Models\Withdraw;
use Auth;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class SuplayerWithdrawController extends Controller
{
    public function index(Request $request)
    {
        $items = Withdraw::where('user_id', auth()->user()->id)->paginate(5);
        return view('pages.suplayer.withdraw', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bank' => 'required',
            'no_rekening' => 'required',
            'name' => 'required',
            'total' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        if ($request->total >= auth()->user()->saldo) {
            return redirect()->back()->withErrors('Penarikan melebihi saldo anda !');
        }


        Withdraw::create($data);
        $user = Auth::user();
        $user->saldo -= $data['total'];
        $user->save();

        return redirect()->back()->withSuccess('Penarikan Saldo Sedang Di Prosses');
    }
}
