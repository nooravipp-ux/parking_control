<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/gate_in', [App\Http\Controllers\HomeController::class, 'gate_in'])->name('home.gate_in');
Route::post('/home/gate_out', [App\Http\Controllers\HomeController::class, 'gate_out'])->name('home.gate_out');

Route::get('/members', [App\Http\Controllers\MemberController::class, 'index']);
Route::post('/members/save', [App\Http\Controllers\MemberController::class, 'save'])->name('member.save');

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::post('/transaksi/filter', [App\Http\Controllers\TransaksiController::class, 'filter_data'])->name('transaksi.filter');;

