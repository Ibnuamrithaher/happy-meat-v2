<?php

namespace App\Http\Controllers;

use App\Models\VideoTutorial;
use Illuminate\Http\Request;

class DetailVideoController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = VideoTutorial::all()
                    ->where('slug', $slug)
                    ->firstOrFail();
        return view('pages.detail_video',[
            'item' => $item
        ]);
    }
}
