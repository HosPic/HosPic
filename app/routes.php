<?php

Route::get('/', function(){
	if (Auth::check()){
		return View::make('hello');
	}else{
		return Redirect::route('getLogin');
	}
});

Route::get('/testview', function(){
	return View::make('pages/order');
});

Route::group(array('before'=>'guest'), function(){
	Route::get('/login', array('as'=>'getLogin','uses'=>'UserController@getLogin'));
	Route::post('/login','UserController@postLogin')->before('csrf');
});

Route::group(array('before'=>'auth'), function(){
	Route::group(array('prefix'=>'artikelen'), function(){	
		Route::get('/', array('as'=>'getArticles','uses'=>'ArticleController@index'));
		Route::get('/{id}', array('as'=>'getArticle','uses'=>'ArticleController@show'));
		Route::get('/{id}/edit', array('as'=>'editArticle','uses'=>'ArticleController@edit'));

		Route::post('/store','ArticleController@create');
		Route::put('/{id}','ArticleController@update');
		Route::delete('/{id}','ArticleController@delete');
	});
	Route::group(array('prefix'=>'diensten'), function(){
		Route::get('/{id}', array('as'=>'getService','uses'=>'ServiceController@show'));
		Route::put('/{id}','ServiceController@update');
	});
	Route::get('/leveringen', array('as'=>'getDeliver','uses'=>'DeliverController@index'));
	Route::get('/bestellingen', array('as'=>'getMyOrders','uses'=>'OrderController@index'));
	Route::get('/bestellen', array('as'=>'getOrder','uses'=>'OrderController@index'));
	Route::get('/statistieken', array('as'=>'getStatistics','uses'=>'StatisticsController@index'));
	Route::get('/logout', array('as'=>'getLogout','uses'=>'UserController@getLogout'));
});