<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','PagesController@index');


Route::get('/middleware', 'PagesController@middleware');

Route::get('blade','PagesController@blade'); 

Route::get('profile','PagesController@profile');
Route::get('settings','PagesController@settings');

Route::get('/','WelcomeController@index');

Route::get('/home','HomeController@index');

Route::get('users', ['uses' =>'UsersController@index']);
Route::get('users/create',['uses' => 'userscontroller@create']);
Route::post('users',['uses' => 'userscontroller@store']);

/*
Route::get('users', function(){
	$users =[
'0' =>[
	'first_name' => 'Renato',
	'last_name' => 'Hysa',
	'location' => 'Albania'
],

'1' => [
	'first_name' => 'Jessica',
	'last_name' => 'Alba',
	'location' => 'USA'
] 

	];

	return $users;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function() {
	Route::get('/contactblog', 'PagesController@contactblog');
	Route::get('/about','PagesController@about');
	Route::get('/welcomeblog','PagesController@welcomeblog');
	Route::resource('posts','PostController');


});
