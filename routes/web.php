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

// Main
Route::get('/', function () {
    return view('main');
});

Route::view('template', 'layouts.dashboard');
Route::view('produk', 'index');
Route::view('team', 'team');

// Auth
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login', 'user');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Admin Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
