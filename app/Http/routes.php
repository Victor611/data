<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
//Route::any('ru/login', function(){return redirect('login');});
Route::group(
    [
        'prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale(),
        'middleware' => [ 'localeCookieRedirect', 'localizationRedirect' ]
    ],
    function() {

        Route::get('/',function(){return redirect('/home');});
       // Route::get('/register',function(){return redirect('/home');});
        Route::any('/{page}', 'HomeController@handle')->where('page', '^(?!admin).*');
        //Route::get('/optout', 'HomeController@optout');
        Route::post('/demo', 'MailController@demo');
    }
);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],  function(){
//read
    Route::get('/{page?}/{id?}', 'AdminController@read')->where(['id'=> '[0-9]+']);
//show form    
    Route::get('/{method}/{table}/{id?}', 'AdminController@show_form')->where(['id'=> '[0-9]+']);
//create update delete   
   // Route::post('/{table?}', 'CrudController@handle');
    Route::post('/{method}/{table}/{id?}', 'CrudController@admin')->where(['id'=> '[0-9]+']);
});



