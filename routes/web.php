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

Route::get('/login', function () {
    return view('pengguna.login');
});

Route::get('/register', function () {
    return view('pengguna.register');
});

Route::get('/dashboard', function () {
    return view('pengguna.dashboard');
});

Route::middleware('auth')->group(function(){
    Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
    // Route::get('/dashboard','DashboardController@index');
});