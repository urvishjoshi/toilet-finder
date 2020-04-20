<?php

Route::get('/', function () { return view('welcome'); });

// Auth::routes();

Route::get('/home', function () { return view('welcome'); });
// Route::view('/home', 'home')->middleware('auth');

Route::group(['prefix'=>'admin'],function(){
	Route::get('/', function () { return redirect()->route('a.dash'); });
	Route::group(['namespace'=>'Admin'],function(){
		Route::get('/login', 'AuthController@showLoginForm')->name('a.login');
		Route::post('/login', 'AuthController@login');
	});
	Route::group(['middleware'=>'auth:admin','namespace'=>'Admin','as'=>'a.'],function(){
		Route::post('/logout', 'AuthController@logout')->name('logout');
		Route::get('/dashboard', 'HomeController@index')->name('dash');
		Route::resource("/requests",'RequestController');
		Route::resource("/toiletowners",'ToiletownerController');
		Route::resource("/sales",'SalesController');
		Route::resource("/ratings",'RatingController');
		Route::resource("/toiletusers",'ToiletuserController');
		Route::resource("/reports",'ReportController');
		Route::resource("/permissions",'PermissionController');
	});
});

Route::group(['prefix'=>'toiletowner'],function(){
	Route::get('/', function () { return redirect()->route('to.login'); });
	Route::group(['namespace'=>'Toiletowner'],function(){
		Route::get('/login', 'AuthController@showLoginForm')->name('to.login');
		Route::post('/login', 'AuthController@login');
		Route::get('/register', 'AuthController@showRegisterForm');
		Route::post('/register', 'AuthController@create');
	});
	Route::group(['middleware'=>'auth:toiletowner','namespace'=>'Toiletowner'],function(){
		Route::post('/logout', 'AuthController@logout')->name('logout');
		Route::get('/dashboard', 'HomeController@index');
		Route::resource("/personal",'PersonalController');
		Route::resource("/toiletowners",'ToiletController');
		Route::resource("/toiletusers",'ToiletuserController');
		Route::resource("/ratings",'RatingController');
	});
});