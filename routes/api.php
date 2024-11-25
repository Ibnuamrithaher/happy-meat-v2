<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\TransactionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('meatPackage', [ProductController::class, 'index']);
Route::post('meatPackage', [ProductController::class, 'store']);
Route::put('/meatPackage/{id}', [ProductController::class, 'update']);
Route::delete('/meatPackage/{id}', [ProductController::class, 'destroy']);
Route::get('transaction', [TransactionController::class, 'index']);
