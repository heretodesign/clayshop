<?php

Route::get('/', [
'uses' => 'ProductController@index',
'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
'uses' => 'ProductController@getAddToCart',
'as' => 'product.addtocart'
]);


Route::group(['prefix' => 'user'], function() {
	Route::group(['middleware' => 'guest'], function() {
		Route::get('/signup', [
		'uses' => 'UserController@getSignup',
		'as' => 'user.signup'
		]);

		Route::post('/signup', [
		'uses' => 'UserController@postSignup',
		'as' => 'user.signup'
		]);

		Route::get('/signin', [
		'uses' => 'UserController@getSignin',
		'as' => 'user.signin'
		]);

		Route::post('/signin', [
		'uses' => 'UserController@postSignin',
		'as' => 'user.signin'
		]);
	});

	Route::group(['middleware' => 'guest'], function() {
		Route::post('/profile', [
		'uses' => 'UserController@getProfile',
		'as' => 'user.profile'
		]);

		Route::post('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'user.logout'
		]);
	});
});



Route::get('/shoppingcart', 'PagesController@getShoppingCart');
