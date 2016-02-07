<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', [
	    'as' => 'index', 'uses' => 'HomeController@index'
	]);
	Route::post('/', [
	    'as' => 'store', 'uses' => 'HomeController@store'
	]);
});

Route::get('/mail', function(){
	Mail::send('emails.welcome', ['key' => 'value'], function($message)
	{
		$message->to('a.perrier721@gmail.com', 'Alain Perrier')->subject('Welcome!');
	});
});