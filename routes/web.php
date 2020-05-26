<?php

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

// ユーザー登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
// ログイン認証
Route::get("login", "Auth\LoginController@showLoginForm")->name("login");
Route::post("login", "Auth\LoginController@login")->name("login.post");
Route::get("logout", "Auth\LoginController@logout")->name("logout.get");
//ユーザ機能
Route::group(["middleware" => ["auth"]], function () {
    Route::resource("users", "UserController", ["only" => ["show"]]);
    // Route::post("users", "UsersController@give");
});
// 株価情報
Route::get("https://api.matumo.com/kabu/kabu_ave_realtime_api_v1.php?type=1", "StockController@show");

Route::get('/', 'MicropostsController@index');