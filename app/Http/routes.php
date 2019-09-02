<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Authentication routes...
	Route::get('/login', 'Auth\AuthController@getLogin');
	Route::post('/login', 'Auth\AuthController@postLogin');
	
	Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
	Route::get('/register', 'Auth\AuthController@getRegister');
	Route::post('/register', 'Auth\AuthController@postRegister');

	Route::controllers(['password' => 'Auth\PasswordController']);
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
	
	Route::get('/', 'WebsiteController@index');
	
	Route::get('/adminDashboard', 'AdminController@index');
	
	Route::resource('newrequest', 'NewRequestController');
	
	Route::get('admin/update/{id}', 'AdminController@update');
	
	Route::get('/profile/update/{id}', 'UserProfileController@update');
	
	Route::resource('profile', 'UserProfileController');
	
	Route::resource('admin', 'AdminController');
	
	Route::resource('rent', 'RentController');
	
	Route::post('{user_id}/{product}/{status}/photo', 'RentController@addPhoto');
	
	Route::get('{user_id}/{product}/{status}', 'RentController@show');
	
	Route::delete('photos/{id}', 'PhotoController@destroy');
	
	Route::get('rentalAd', 'RentController@rentAd');
	
	Route::post('email/home', 'UserProfileController@sendEmailHome');
	
	Route::post('email/adminDashboard', 'AdminController@sendEmailHome');
	
	Route::resource('tracker', 'TrackerController');
	
	Route::post('admin/createTechnician', 'AdminController@store');
	
	Route::resource('/complete', 'AdminController@requestStatus');
	
	Route::post('website/email', 'WebsiteController@websiteEmail');
		
});
