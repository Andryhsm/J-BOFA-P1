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

Route::prefix('admin')->namespace('Admin')->group(function () {
    //show homepage
    Route::get('/home', 'HomeController@index')->name('home');

    /*start profil*/
    Route::resource('user','AdminController');
    Route::get('/edit-profil', 'ProfilController@index')->name('profil');
    Route::get('/get_user', 'AdminController@getAll')->name('get_user');
    Route::get('/Admin', 'AdminController@listAdmin')->name('Admin');
    Route::get('/get_Admin', 'AdminController@getAdmin')->name('get_Admin');
    Route::get('/user/get-filter', 'AdminController@getFilterList')->name('get-filter');
    Route::post('/post-profil', 'ProfilController@update')->name('post-profil');
    Route::post('/delete/$id', 'AdminController@destroy')->name('delete');
    Route::post('/update/{id}', 'AdminController@update');
    Route::post('user_status', 'AdminController@updateStatus')->name('user_status');
    /*end profil*/

    /*category*/
    Route::resource('category','CategoryController');
    Route::get('get_all','CategoryController@getAll');
    Route::post('/category_status','CategoryController@updateStatus');
    /*End category*/
});


/*start front router*/
Route::namespace('Front')->group(function () {
    //Auth route Artisan
    Route::get('connexion','LoginController@index')->name('connexion');
    Route::get('inscription','LoginController@inscription')->name('inscription');
    Route::get('cities','CityController@getCity');

    //get all catégorie
    Route::get('category','CategoryController@getAllCategories')->name('catégory_list');

    Route::get('how_work', function () {
        return view('front.page.how_work');
    });
    Route::get('faq', function () {
        return view('front.page.faq');
    });
    Route::get('tarif', function () {
        return view('front.page.tarif');
    });
    Route::get('view_project', function () {
        return view('front.page.view_project');
    });
});
/*end front router*/

// start Auth route
Route::namespace('Auth')->group(function () {
    /* start admin auth*/
    Route::get('admin','AdminLoginController@showLoginForm')->name('admin_form');
    Route::post('admin_login',['as'=>'admin_login','uses'=>'AdminLoginController@login']);
    /* End admin auth*/
});
// end Auth route

// start Auth route
Route::middleware(['auth'])->namespace('Artisan')->prefix('artisan')->group(function () {
    Route::get('accueil','ArtisanController@index')->name('artisan_home');
    Route::get('disponnible','ArtisanController@showAvailablePage')->name('artisan_available');
});
// end Auth route
