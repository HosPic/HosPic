<?php

Route::get('/', function(){
	return View::make('hello');
});
Route::group(array('before'=>'guest'),function(){
	Route::get('/login',array('as'=>'getLogin','uses'=>'UserController@getLogin'));
	Route::post('/login','UserController@postLogin');
});

Route::group(array('before'=>'auth'),function(){
	Route::group(array('prefix'=>'artikelen'),function(){	// Route::get('/'array('as'=>'getArticles','uses'=>'ArticleController@index'));
		Route::get('/{id}',array('as'=>'getArticle','uses'=>'ArticleController@show'));
		// Route::get('/{id}/edit',array('as'=>'editArticle','uses'=>'ArticleController@edit'));

		Route::post('/store','ArticleController@create');
		Route::put('/{id}','ArticleController@update');
		Route::delete('/{id}','ArticleController@delete');
	});
	Route::group(array('prefix'=>'diensten'),function(){
		Route::get('/',array('as'=>'getServices','uses'=>'ServiceController@index'));
		Route::get('/{id}'array('as'=>'getService','uses'=>'ServiceController@show'));
		Route::get('/{id}/edit',array('as'=>'editService','uses'=>'ServiceController@edit'));

		Route::post('/store','ServiceController@create');
		Route::put('/{id}','ServiceController@update');
		Route::delete('/{id}','ServiceController@delete');
	});
	Route::get('/aanvragen',array('as'=>'getMyRequests','uses'=>'RequestController@index'));
	Route::get('/bestellingen', array('as'=>'getMyOrders','uses'=>'OrderController@index'));
	Route::get('/statistieken',array('as'=>'getStatistics','uses'=>'StatisticsController@index'));
	Route::get('/logout',array('as'=>'getLogout','uses'=>'UserController@getLogout'));
});