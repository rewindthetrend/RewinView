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
    return view('frontend.index');
});
Route::get('/', 'RewindController@index')->name('front');
Route::get('/blog', 'RewindController@blog')->name('blog');
Route::get('/contact', 'RewindController@contact')->name('contact');
Route::get('/single{id}', 'RewindController@single')->name('single');
Route::get('/technology', 'RewindController@technology')->name('technology');
Route::get('/gadjet', 'RewindController@gadjet')->name('gadjet');
Route::get('/cryptoz', 'RewindController@cryptoz')->name('cryptoz');
Route::get('/sportz', 'RewindController@sportz')->name('sportz');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostController');
Route::resource('sports','SportsController');
Route::resource('crypto','CryptoController');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'PostController@logout');
Route::get('/logout', 'SportsController@logout');
Route::get('/logout', 'CryptoController@logout');
