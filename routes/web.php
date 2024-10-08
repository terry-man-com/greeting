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
// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/controller/comments/{time}', [App\Http\Controllers\GreetingController::class, 'simple']);

//自由なメッセージ　ルーティング
Route::get('/controller/comments/freeword/{msg}', [App\Http\Controllers\GreetingController::class, 'freeword']);
