<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class, 'handleAdmin'])->name('dashboardAdmin')->middleware('admin');
Route::get('img/{filename}', 'DashboardController@displayImage')->name('image.displayImage');

//Tambah Data
Route::get('/admin/dashboard/tambahdata', [DashboardController::class, 'tambah'])->name('tambahData');
Route::post('/admin/dashboard', [DashboardController::class, 'store']);

//Detail
Route::get('/dashboard/detail/{id}', [DashboardController::class, 'detail'])->name('detail');
Route::get('/admin/dashboard/detail/{id}', [DashboardController::class, 'adminDetail'])->name('detailAdmin');

//Edit Data
Route::get('/admin/dashboard/{id}/tambahdata', [DashboardController::class, 'edit'])->name('editData');
Route::put('/admin/dashboard/{id}', [DashboardController::class, 'update']);

//Delete Data
Route::delete('/admin/dashboard/{id}', [DashboardController::class, 'delete']);
Route::delete('/dashboard/cart/{id}', [CartController::class, 'destroy']);


//Add to cart
Route::get('/dashboard/cart', [CartController::class, 'index'])->name('cart');
Route::post('/dashboard', [CartController::class, 'store']);


require __DIR__.'/auth.php';
