<?php  use Illuminate\Http\Request;
// //					user
Route::group(['as'=>'api.'],function(){
	Route::group(['namespace'=>'Api'],function(){
		Route::post('login', 'AuthController@login')->name('login');
		Route::post('register', 'AuthController@create')->name('register');
		Route::post('logout', 'AuthController@logout')->name('logout');
		Route::resource("toilets",'ToiletController');
		Route::resource("toilets/{id}/book",'BookController');
		Route::get("toilets/{id}/ratings",'RatingController@showRating')->name('showRating');
		Route::get("user/{id}",'UserController@user')->name('user');
		// Route::group(['middleware'=>'auth:user'],function(){
		// });
	});
	// Route::group(['namespace'=>'User'],function(){
	// 	Route::post('logout', 'AuthController@logout')->name('logout');
	// 	Route::get('dashboard', 'HomeController@index');
	// 	Route::resource("personal",'PersonalController');
	// 	Route::resource("toiletusers",'ToiletuserController');
	// 	Route::resource("sales",'SaleController');
	// 	Route::resource("ratings",'RatingController');
	// 	Route::resource("feedbacks",'FeedbackController');
	// });
});