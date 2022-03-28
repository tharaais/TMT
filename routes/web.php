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

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
	
	Route::get('map', 'PageController@gmaps');
		Route::get('location', 'PageController@GetLocations');

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return View('body');
	});
		Route::get('/trade', function()
	{
		return View('trade');
	});
		Route::get('/transportation', function()
	{
		return View('/transportation');
	});
		Route::get('/news', function()
	{
		return View('news');
	});
		Route::get('/contact', function()
	{
		return View('contact');
	});

	
	    Route::get('/single_new/{news_id}', function($news_id)
	{
		return View('single_new')->with('news_id', $news_id);

	});
	
        Route::get('/single/{item_id}', function($item_id)
	{
		return View('single')->with('item_id', $item_id);

	});
	
	
	 
	    Route::get('/brands', function()
	{
		return View('brands');
	});
	    Route::get('/about', function()
	{
		return View('about');
	});
	Route::get('/{tomato}','PageController@m') ;
	
	 // Authentication Routes
    // Login Get
    Route::get(LaravelLocalization::transRoute('login'),  
               array('as' => 'showLoginForm', 'uses' => 'Auth\LoginController@showLoginForm') );
    // Login Post
    Route::post(LaravelLocalization::transRoute('login'), 
                array('as' => 'login', 'uses' => 'Auth\LoginController@login') );
    // Logout Get
    // Route::get(LaravelLocalization::transRoute('logout'), 
    //            array('as' => 'logout', 'uses' =>  'Auth\LoginController@logout') );
	// Logout Post
    Route::post(LaravelLocalization::transRoute('logout'), 
                array('as' => 'logout', 'uses' => 'Auth\LoginController@logout') );

    // Registration Routes...
    // Register Get
    Route::get(LaravelLocalization::transRoute('register'),  
               array('as' => 'showRegistrationForm', 'uses' => 'Auth\RegisterController@showRegistrationForm') );
    // Register Post
    Route::post(LaravelLocalization::transRoute('register'), 
                 array('as' => 'register', 'uses' => 'Auth\RegisterController@register') );
				 
				 
	 Route::get(LaravelLocalization::transRoute('password/request'),  
               array('as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm') );
	Route::get(LaravelLocalization::transRoute('password/email'),  
               array('as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail') );
	

    Route::get('/dashboard', 'DashboardController@index')->name('home');
	
});
