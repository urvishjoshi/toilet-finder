<?php
Route::get('/', function () { return view('welcome'); });
// 					Admins
Route::group(['prefix'=>'admin'],function(){
	Route::get('/', function () { return redirect()->route('a.login'); });
	Route::group(['namespace'=>'Admin'],function(){
		Route::get('login', 'AuthController@showLoginForm')->name('a.login');
		Route::post('login', 'AuthController@login');
	});
	Route::group(['middleware'=>'auth:admin','namespace'=>'Admin','as'=>'a.'],function(){
		Route::post('logout', 'AuthController@logout')->name('logout');
		Route::resource('dashboard', 'HomeController');
	    Route::resource("locations",'LocationController');
		Route::resource("requests",'RequestController');
		Route::resource("toiletowners",'ToiletownerController');
		Route::resource("toilets",'ToiletController');
		Route::resource("sales",'SalesController');
		Route::resource("ratings",'RatingController');
		Route::resource("toiletusers",'ToiletuserController');
		Route::resource("reports",'ReportController');
		Route::resource("feedbacks",'FeedbackController');
		Route::resource("settings",'SettingController');
		Route::resource("personal",'PersonalController');
	});
});
//					toiletowner
Route::group(['prefix'=>'toiletowner'],function(){
	Route::get('', function () { return redirect()->route('to.login'); });
	Route::group(['namespace'=>'Toiletowner'],function(){
		Route::get('login', 'AuthController@showLoginForm')->name('to.login');
		Route::post('login', 'AuthController@login');
		Route::get('register', 'AuthController@showRegisterForm');
		Route::post('register', 'AuthController@create');
	});
	Route::group(['middleware'=>'auth:toiletowner'],function(){
		Route::resource("feedbacks",'FeedbackController');

		Route::group(['namespace'=>'Toiletowner'],function(){
			Route::post('logout', 'AuthController@logout')->name('logout');
			Route::resource('dashboard', 'HomeController');
			Route::resource("requests",'RequestController');
			Route::resource("personal",'PersonalController');
			Route::resource("toilets",'ToiletController');
			Route::resource("toiletusers",'ToiletuserController');
			Route::resource("sales",'SaleController');
			Route::resource("ratings",'RatingController');
			Route::resource("reports",'ReportController');
		});
	});
});
