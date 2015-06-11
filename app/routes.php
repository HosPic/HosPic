<?php

Route::get('/', function() {
	if (Auth::check()) {
		return Redirect::route(Auth::user()->getDefaultPage());
	} else {
		return Redirect::route('getLogin');
	}
});

Route::group(array('before'=>'guest'), function() {
	Route::get('/login', array('as'=>'getLogin','uses'=>'UserController@getLogin'));
	Route::post('/login','UserController@postLogin')->before('csrf');
});

Route::group(array('before'=>'auth'), function() {
	Route::group(array('prefix'=>'artikelen'), function() {	
		Route::get('/', array('as'=>'getArticles','uses'=>'ArticleController@index'));
		Route::post('/', array('as'=>'getArticles','uses'=>'ArticleController@index'));
		Route::get('/{id}', array('as'=>'getArticle','uses'=>'ArticleController@show'));
		Route::get('/{id}/edit', array('as'=>'editArticle','uses'=>'ArticleController@edit'));

		Route::post('/store','ArticleController@create');
		Route::put('/{id}','ArticleController@update');
		Route::delete('/{id}','ArticleController@delete');
	});

	Route::get('/diensten', array('as'=>'getService','uses'=>'ServiceController@index'));
	Route::get('/special', array('as'=>'getSpecialOrder','uses'=>'OrderController@special'));
	Route::get('/leveringen', array('as'=>'getDeliver','uses'=>'DeliverController@index'));
	Route::get('/aanvragen', array('as'=>'getMyServices','uses'=>'ServiceController@show'));
	Route::get('/bestellingen', array('as'=>'getMyOrders','uses'=>'OrderController@show'));
	Route::get('/bestellen', array('as'=>'getOrder','uses'=>'OrderController@index'));
	Route::get('/statistieken', array('as'=>'getStatistics','uses'=>'StatisticsController@index'));
	Route::get('/logout', array('as'=>'getLogout','uses'=>'UserController@getLogout'));
});