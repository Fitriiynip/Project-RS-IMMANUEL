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
    return view('welcome', [
        "title" => "Home"
    ]);
});
Route::get('/mooo', function () {
    return view('mooo', [
        "title" => "moooS"
    ]);
});
Route::get('/mooo1', function () {
    return view('login.index', [
        "title" => "login test"
    ]);
});
Route::get('/mooo2', function () {
    return view('login.register', [
        "title" => "register test"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['aute', 'role:admin']], function(){
    route::get('/', function(){
        return 'halaman admin';
    });
    route::get('profile', function(){
        return 'halaman profile admin';
});
});

// hanya untuk role pengguna
Route::group(['prefix' => 'pengguna', 'middleware' => ['aute', 'role:pengguna']], function(){
    route::get('/', function(){
        return 'halaman pengguna';
    });
    route::get('profile', function(){
        return 'halaman profile pengguna';
});
});
