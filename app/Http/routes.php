<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', [
	    'as' => 'index', 'uses' => 'HomeController@index'
	]);
	Route::post('/', [
	    'as' => 'store', 'uses' => 'HomeController@store'
	]);
});
