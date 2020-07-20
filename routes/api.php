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
		Route::get("user/{id}/usages",'UserController@usages')->name('usages');
		Route::get("baners",'BanerController@index');
		// Route::group(['middleware'=>'auth:user'],function(){
		// });
	});
	Route::get("user/{id}/feedbacks",'FeedbackController@show')->name('feedback');
	Route::post("user/{id}/feedbacks",'FeedbackController@user')->name('feedback');
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