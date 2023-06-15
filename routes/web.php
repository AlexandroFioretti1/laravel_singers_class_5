<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SingerController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/singers', [PageController::class, 'singers'])->name('singers');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::resource('/admin/singers', SingerController::class);
Route::resource('/admin/albums', AlbumController::class);
Route::resource('/admin/albums', AlbumController::class)->parameters(['albums' => 'album:slug']);

