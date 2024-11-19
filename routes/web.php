<?php

use App\Http\Controllers\GlobalController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', function () {
    return view('homepage');
});

Route::get('/edit-jasa', function () {
    return view('edit-jasa');
});

Route::get('/lihat-jasa', function () {
    return view('lihat-jasa');
});

Route::get('/tambah-jasa', function () {
    return view('tambah-jasa');
});

Route::get('/pesanan-hari-ini', function () {
    return view('pesanan-hari-ini');
});

Route::get('/pesanan-minggu-ini', function () {
    return view('pesanan-minggu-ini');
});

Route::get('/pesanan-bulan-ini', function () {
    return view('pesanan-bulan-ini');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/edit-toko', function () {
    return view('edit-toko');
});

Route::get('/', [GlobalController::class, 'index'])->name('index');
Route::get('/search', [GlobalController::class, 'Search'])->name('search');
