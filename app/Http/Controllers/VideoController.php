<?php

namespace App\Http\Controllers;

use App\Models\VideoTutorial;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $items = VideoTutorial::all();
        return view('pages.videotutorial',[
            'items' => $items,
            'latest_video' => VideoTutorial::latest()->get()
        ]);
    }
}
