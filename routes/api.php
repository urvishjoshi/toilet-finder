<?php  use Illuminate\Http\Request;
// //					user
Route::group(['prefix'=>''],function(){
	Route::get('', function () { return redirect()->route('to.login'); });
	Route::group(['namespace'=>'Toiletowner'],function(){
		Route::get('login', 'AuthController@showLoginForm')->name('to.login');
		Route::post('login', 'AuthController@login');
		Route::get('register', 'AuthController@showRegisterForm');
		Route::post('register', 'AuthController@create');
	});
	Route::group(['middleware'=>'auth:web','namespace'=>'Toiletowner','as'=>'api.'],function(){
		Route::post('logout', 'AuthController@logout')->name('logout');
		Route::get('dashboard', 'HomeController@index');
		Route::resource("personal",'PersonalController');
		Route::resource("toilets",'ToiletController');
		Route::resource("toiletusers",'ToiletuserController');
		Route::resource("sales",'SaleController');
		Route::resource("ratings",'RatingController');
		Route::resource("feedbacks",'FeedbackController');
	});
});