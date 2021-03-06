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
use App\Models\Contact;

Route::get('/', 'Front\LoginController@getIndex')->name('accueil');

Auth::routes();

Route::prefix('admin')->namespace('Admin')->group(function () {
    //show homepage
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('contact','HomeController@update')->name('contact_site');

    Route::get('/emailing','EmailController@index')->name('emailing');
    Route::post('/sendemail','EmailController@sendEmial')->name('send_email');
    Route::get('/sendemail_by_dep','EmailController@sendByDep')->name('send_email_dep');

    /*start profil*/
    Route::resource('user','AdminController');
    Route::resource('artisan','UserController');
    Route::post('artisan/delete','AdminController@deleteArtisan')->name('delete_artisan');
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
    
    /* subscibe list*/
    Route::get('list_subscibe','AdminController@listSubscribe')->name('list_subscribe');
    Route::get('subscibe','AdminController@getSubscribe')->name('get_subscribe');
    /* end subscibe list*/
    

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

    Route::get('how_work','LoginController@hoWork');
    Route::get('faq','CityController@getFaq')->name('faq');
    Route::get('term&condition','CategoryController@termCondition');
    /**** Devis  ****/
    Route::get('view_project/{id}','LoginController@viewProject');
    Route::get('new_project','LoginController@getCategory')->name('view_project');
    Route::get('view_project','LoginController@newDevis')->name('new_project');
    Route::post('create_devis','DevisController@createDevis')->name('create_devis');
    /**** End Devis ****/
    /** DEvis and presentation catégories */
    Route::get('tarif_hour','CategoryController@tarifHoraire');
    Route::get('help_me','CategoryController@help');
     Route::get('renovation','CategoryController@renovation');
    /* End Devis and presentation catégories*/

    /* Recuperation mdp*/
    Route::get('recuperation/{id}','LoginController@recuperMdp')->name('recuperation');
    Route::post('recup_mdp','LoginController@updateMdp')->name('recup_mdp');
    Route::post('reinit_mdp','LoginController@mdpReinitial')->name('reinit_mdp');
    /* end Recuperation mdp*/
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
    Route::get('confirmation/{names}',function($names)
    {
        $contact = Contact::find(1);
        return view('front/login/inscription',compact('names','contact'));
    })->name('confirmation');
});
// end Auth route

// start Auth route
Route::middleware(['auth'])->namespace('Artisan')->prefix('artisan')->group(function () {
    Route::get('accueil','ArtisanController@index')->name('artisan_home');
    Route::get('disponnible','ArtisanController@showAvailablePage')->name('artisan_available');
    Route::get('project/{project_id}','ArtisanController@showProjectDetails')->name('project_details');
    Route::get('profil/{id}','ArtisanController@showProfil')->name('artisan_profil');
    Route::get('confirm_email/{id}','ArtisanController@confirmMail')->name('confim');
    Route::get('coordonate/{id}','ArtisanController@coordonate')->name('artisan_coordonate');
    Route::get('create_site','ArtisanController@createSite')->name('artisan_site');
    Route::post('save_site','ArtisanController@saveSite')->name('create_site');
    Route::get('change_mdp','ArtisanController@ChangeMdp')->name('change_mdp');
    Route::get('document_official','ArtisanController@DocumentOfficial')->name('document_official');
    Route::get('label_quality','ArtisanController@LabelQuality')->name('label_quality');
    Route::get('realisation','ArtisanController@Realisation')->name('realisation');
    Route::get('service','ArtisanController@showService')->name('service');
    Route::post('update_profile','ArtisanController@updateProfil')->name('update_profile');
    /*Test stripe*/
    Route::get('stripe', 'ArtisanController@stripe');
    Route::post('payment', 'ArtisanController@payStripe'); 
    Route::get('project_accepted', 'ArtisanController@showProjectAccepted')->name('project_accepted'); 
    /*end test stripe*/

    /*project accepted*/
    Route::post('accept','ArtisanController@accepted')->name('accept_project');
    /*Route::get('accepted','ArtisanController@showAccepted')->name('project_accepted');*/
    /*end project accepted*/
    /* change mdp */
    Route::post('change_mdp','ArtisanController@updateMdp')->name('change_mdp');
    /* end change mdp */
});
// end Auth route 


