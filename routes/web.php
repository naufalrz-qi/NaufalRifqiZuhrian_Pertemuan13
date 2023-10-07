<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::controller(BarangController::class)->name('barang.')->prefix('master-data/barang')->group(function () {
    Route::get('/','index')->name('index');
    });
    
Route::controller(BarangController::class)->name('listbarang.')->prefix('master-data/barang/list')->group(function () {
    Route::get('/','list_barang')->name('list_barang');
    });