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

// Auth
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login', 'user');
// Route::post('/login', 'Auth\LoginController@login');
// Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

// Main
Route::get('/', 'HomeController@index');


Route::view('template', 'layouts.dashboard');


// Admin Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware'=>['isAdmin']], function(){
    Route::resource('product', 'ProductController');
    Route::resource('team', 'TeamController');
    Route::resource('berita', 'BeritaController');
});

Route::group(['middleware'=>['isUser']], function(){
    Route::resource('/user', 'ProductController');
});

Route::get('/home', function(){
    if(auth()->user()->is_admin){
       return redirect('/product');
    }
    return redirect('/user');
});

Route::view('/newss', 'news');
Route::view('/guest', 'guest');
