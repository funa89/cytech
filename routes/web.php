<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;

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

 //検索結果を表示する
 Route::get('/serch','App\Http\Controllers\ProductsController@serch');

 //ユーザー一覧と検索画面
 Route::get('/product','App\Http\Controllers\ProductsController@index');

// Route::get('/', function () {
    //return view('index');
//});
