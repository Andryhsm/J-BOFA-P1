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

Route::prefix('admin')->group(function () {
    Route::get('/home', 'Admin\HomeController@index')->name('home');

    /*start profil*/
    Route::resource('user','Admin\AdminController');
    Route::get('/edit-profil', 'Admin\ProfilController@index')->name('profil');
    Route::get('/get_user', 'Admin\AdminController@getAll')->name('get_user');
    Route::get('/user/get-filter', 'Admin\AdminController@getFilterList')->name('get-filter');
    Route::post('/post-profil', 'Admin\ProfilController@update')->name('post-profil');
    Route::post('/delete/$id', 'Admin\AdminController@destroy')->name('delete');
    Route::post('/update/{id}', 'Admin\AdminController@update');
    Route::post('user_status', 'Admin\AdminController@updateStatus')->name('user_status');

    /*end profil*/
    /*category*/
    Route::resource('category','Admin\CategoryController');
    Route::get('get_all','Admin\CategoryController@getAll');
    Route::post('/category_status','Admin\CategoryController@updateStatus');
    /*End category*/
    /* artisan auth*/
    Route::get('artisan_login','Auth\ArtisanLoginController@showLogin')->name('artisanlogin');
    Route::post('loginartisan','Auth\ArtisanLoginController@loginAdmin')->name('artisan_auth');
    /* End artisan auth*/
   
});
 

/*start front router*/
Route::namespace('Front')->group(function () {
    Route::get('connection','LoginController@index')->name('connection');
    Route::get('inscription','LoginController@inscription')->name('inscription');
    Route::get('category','LoginController@front');
});
/*end front router*/
Route::get('artisan/accueil', function () {
    return view('artisan.page.index');
});
Route::get('artisan/available', function () {
    return view('artisan.page.project_available');
});
