<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeatPackage;
use App\Models\ArtikelPackage;
use App\Models\Transaction;
use App\Models\VideoTutorial;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'meat_package' => MeatPackage::count(),
            'article_package' => ArtikelPackage::count(),
            'video_tutorial' => VideoTutorial::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
        ]);
    }
}
