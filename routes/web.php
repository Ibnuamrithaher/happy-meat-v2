<?php

class App extends Illuminate\Support\Facades\App {}
class Artisan extends Illuminate\Support\Facades\Artisan {}
class Auth extends Illuminate\Support\Facades\Auth {}

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MeatPackageController;
use App\Http\Controllers\Admin\ArtikelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ArtikelGalleryController;
use App\Http\Controllers\Admin\VideoTutorialController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\Admin\WithDrawController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\Suplayer\SuplayerDashboardController;
use App\Http\Controllers\Suplayer\SuplayerMeatPackageController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MyOrderController;
use App\Http\Controllers\Suplayer\SuplayerListOrderController;
use App\Http\Controllers\Suplayer\SuplayerWithdrawController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');

Route::get('/aboutus', function () {
    return view('pages/aboutus');
});
Route::get('/user-login', function () {
    return view('pages/login');
});
Route::get('/user-register', function () {
    return view('pages/register');
});
// Route::get('/detail-product', function(){
//     return view('pages/detail_produk');
// });
Route::get('/my-account', function () {
    return view('pages/myaccount');
});
// Route::get('/my-order', function(){
//     return view('pages/myorder');
// });

Route::get('/my-order', 'App\Http\Controllers\MyOrderController@index')
    ->name('my-order');

Route::get('/cek-status-pembayaran/{id}', [MyOrderController::class, 'cek_status_pembayaran'])->name('cekstatuspembayran');

Route::get('/detail-order', function () {
    return view('pages/detail_order');
});
Route::get('/checkout-order', function () {
    return view('pages/checkout');
});
Route::get('/mycart', function () {
    return view('pages/cart');
});
Route::get('/detail-artikel', function () {
    return view('pages/detail_artikel');
});
// Route::get('/product', function(){
//     return view('pages/produk');
// });
Route::get('/article', function () {
    return view('pages/artikel');
});

Route::get('/ajukan-partnership', [PartnershipController::class, 'ajukan'])->name('ajukan.mitra');
// Route::get('/detail-video', function(){
//     return view('pages/detail_videotutor');
// });

Route::get('/video', 'App\Http\Controllers\VideoController@index')
    ->name('video');

Route::get('/product', 'App\Http\Controllers\ProductController@index')
    ->name('product');

Route::get('/article', 'App\Http\Controllers\ArtikelController@index')
    ->name('article');

Route::get('/detail-order/{slug}', 'App\Http\Controllers\DetailOrderController@index')
    ->name('detail-order');

Route::get('/detail_video/{slug}', 'App\Http\Controllers\DetailVideoController@index')
    ->name('detail_video');

Route::get('/detail_artikel/{slug}', 'App\Http\Controllers\DetailArtikelController@index')
    ->name('detail_artikel');

Route::get('/detail_produk/{slug}', 'App\Http\Controllers\DetailController@index')
    ->name('detail_produk');

Route::post('/checkout/{id}', 'App\Http\Controllers\CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/{id}', 'App\Http\Controllers\CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'App\Http\Controllers\CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/remove/{detail_id}', 'App\Http\Controllers\CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/confirm/{id}', 'App\Http\Controllers\CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth', 'verified']);

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('dashboard');

        Route::resource('meat-package', MeatPackageController::class);
        Route::get('aprove-meat-package/{id}', [MeatPackageController::class, 'aprove_meat_package'])->name('approve.meat.package');
        Route::get('denied-meat-package/{id}', [MeatPackageController::class, 'denied_meat_package'])->name('denied.meat.package');

        Route::resource('artikel-package', ArtikelPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('artikel-gallery', ArtikelGalleryController::class);
        Route::resource('video-tutorial', VideoTutorialController::class);
        Route::resource('transaction', TransactionController::class);

        Route::get('withdraw', [WithDrawController::class, 'index'])->name('admin.withdraw.index');
        Route::get('withdraw/{id}', [WithDrawController::class, 'tolak'])->name('admin.withdraw.tolak');
        Route::post('withdraw', [WithDrawController::class, 'terima'])->name('admin.withdraw.terima');

        Route::get('partnership', [PartnershipController::class, 'index'])->name('partnership.index');
        Route::get('partnership-terima/{id}', [PartnershipController::class, 'terima'])->name('partnership.terima');
        Route::get('partnership-tolak/{id}', [PartnershipController::class, 'tolak'])->name('partnership.tolak');
    });

Route::prefix('suplayer')->middleware(['auth', 'suplayer'])->group(function () {
    Route::get('/', [SuplayerDashboardController::class, 'index'])->name('dashboard.suplayer');
    Route::resource('meat-package', SuplayerMeatPackageController::class)->names([
        'index' => 'suplayer.meat-package.index',
        'create' => 'suplayer.meat-package.create',
        'store' => 'suplayer.meat-package.store',
        'edit' => 'suplayer.meat-package.edit',
        'update' => 'suplayer.meat-package.update',
        'destroy' => 'suplayer.meat-package.destroy',
    ]);
    Route::get('list-order', [SuplayerListOrderController::class, 'index'])->name('suplayer.list-order');
    Route::get('list-order/{id}', [SuplayerListOrderController::class, 'show'])->name('suplayer.list-order.show');
    Route::resource('withdraw', SuplayerWithdrawController::class)->except(['update', 'destroy', 'edit', 'show']);
});

Auth::routes(['verify' => true]);

//Midtrans
Route::post('/midtrans/callback', 'App\Http\Controllers\MidtransController@notificationHandler');
Route::get('/midtrans/finish', 'App\Http\Controllers\MidtransController@finishRedirect');
Route::get('/midtrans/unfinish', 'App\Http\Controllers\MidtransController@unfinishRedirect');
Route::get('/midtrans/error', 'App\Http\Controllers\MidtransController@errorRedirect');

Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Configuration cache cleared! <br> Configuration cached successfully!';
});

Route::get('/config-clear', function () {
    Artisan::call('config:clear');
    return 'Configuration cache cleared!';
});
