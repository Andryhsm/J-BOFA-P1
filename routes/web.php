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

Route::get('/', 'Front\LoginController@getIndex')->name('accueil');

Auth::routes();

Route::prefix('admin')->namespace('Admin')->group(function () {
    //show homepage
    Route::get('/home', 'HomeController@index')->name('home');

    /*start profil*/
    Route::resource('user','AdminController');
    Route::resource('artisan','UserController');
    Route::get('/edit-profil', 'ProfilController@index')->name('profil');
    Route::get('/get_user', 'AdminController@getAll')->name('get_user');
    Route::get('/Admin', 'AdminController@listAdmin')->name('Admin');
    Route::get('/get_Admin', 'AdminController@getAdmin')->name('get_Admin');
    Route::get('/user/get-filter', 'AdminController@getFilterList')->name('get-filter');
    Route::post('/post-profil', 'ProfilController@update')->name('post-profil');
    Route::post('/delete/$id', 'AdminController@destroy')->name('delete');
    Route::post('/update/{id}', 'AdminController@update');
    Route::post('user_status', 'AdminController@updateStatus')->name('user_status');
    Route::post('admin_status', 'AdminController@adminStatus')->name('admin_status');
    /*end profil*/

    /*category*/
    Route::resource('category','CategoryController');
    Route::get('get_all','CategoryController@getAll');
    Route::post('/category_status','CategoryController@updateStatus');
    Route::post('/category_popular','CategoryController@updatePopular');
    /*End category*/

    /*start faq */
    Route::resource('faq','FaqController');
    Route::get('get_faq','FaqController@getAll');
    Route::post('faq_status', 'FaqController@updateStatus');
    /*end faq */

    

    /* start temoignage */
    Route::resource('temoignage','TemoinController');
    Route::get('get_temoin','TemoinController@getAll');
    Route::post('temoin_status', 'TemoinController@updateStatus');
    /* end temoignage */
});


/*start front router*/
Route::namespace('Front')->group(function () {
    //Auth route Artisan
    Route::get('connexion','LoginController@index')->name('connexion');
    Route::get('inscription','LoginController@inscription')->name('inscription');
    Route::get('cities','CityController@getCity');
    Route::get('get_email','LoginController@getEmail');

    //get all catégorie
    Route::get('category','CategoryController@getAllCategories')->name('catégory_list');

    Route::get('how_work', function () {
        return view('front.page.how_work');
    });
    Route::get('faq','CityController@getFaq')->name('faq');
    Route::get('tarif', function () {
        return view('front.page.tarif');
    });
    /**** Devis  ****/
    Route::get('view_project/{id}','LoginController@viewProject');
    Route::get('view_project','LoginController@newDevis')->name('new_project');
    Route::post('create_devis','DevisController@createDevis')->name('create_devis');
    /**** End Devis ****/
    /** DEvis and presentation catégories */
    Route::get('tarif_hour', function () {
        return view('front.categories.tarif_hour');
    });
    Route::get('help_me', function () {
        return view('front.categories.help_me');
    });
     Route::get('renovation','CategoryController@renovation');
    /* End Devis and presentation catégories*/
});
/*end front router*/

// start Auth route
Route::namespace('Auth')->group(function () {
    /* start admin auth*/
    Route::get('admin','AdminLoginController@showLoginForm')->name('admin_form');
    Route::post('admin_login',['as'=>'admin_login','uses'=>'AdminLoginController@login']);
    Route::post('logout_admin',['as'=>'logout_admin','uses'=>'AdminLoginController@logoutAdmin']);
    /* End admin auth*/

    Route::post('register','RegisterController@create')->name('register');
});
// end Auth route

// start Auth route
Route::middleware(['auth'])->namespace('Artisan')->prefix('artisan')->group(function () {
    Route::get('accueil','ArtisanController@index')->name('artisan_home');
    Route::get('disponnible','ArtisanController@showAvailablePage')->name('artisan_available');
    Route::get('project','ArtisanController@showProjectDetails')->name('project_details');
    Route::get('profil','ArtisanController@showProfil')->name('artisan_profil');
});
// end Auth route 
