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

Auth::routes();

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    /*start profil*/
    Route::get('/edit-profil', 'ProfilController@index')->name('profil');
    Route::post('/post-profil', 'ProfilController@update')->name('post-profil');
    /*end profil*/
});
