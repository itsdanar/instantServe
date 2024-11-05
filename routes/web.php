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


Route::get('/', [GlobalController::class, 'index'])->name('index');
Route::get('/search', [GlobalController::class, 'Search'])->name('search');
