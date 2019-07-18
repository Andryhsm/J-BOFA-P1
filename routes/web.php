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
    return view('front.home.index');
});

Auth::routes();

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    /*start profil*/
    Route::resource('user','AdminController');
    Route::get('/edit-profil', 'ProfilController@index')->name('profil');
    Route::get('/get_user', 'AdminController@getAll')->name('get_user');
    Route::get('/user/get-filter', 'AdminController@getFilterList')->name('get-filter');
    Route::post('/post-profil', 'ProfilController@update')->name('post-profil');
    Route::post('/delete/$id', 'AdminController@destroy')->name('delete');
    Route::post('/update/{id}', 'AdminController@update');
    Route::post('user_status', 'AdminController@updateStatus')->name('user_status');
    /*end profil*/
    /*Login*/

    /*End Login*/
});

/*start front router*/
Route::namespace('Front')->group(function () {
    Route::get('login','LoginController@index')->name('login');
    Route::get('signin','LoginController@inscription')->name('signin');
});
/*end front router*/
