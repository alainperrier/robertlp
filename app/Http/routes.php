<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', [
	    'as' => 'index', 'uses' => 'HomeController@index'
	]);
	Route::post('/', [
	    'as' => 'store', 'uses' => 'HomeController@store'
	]);

	Route::get('/contact', function () {
    	\Mail::send('emails.welcome', [], function ($message){
            $message->from('contact@chez-robert.fr', 'Chez Robert');
            $message->sender('contact@chez-robert.fr', 'Chez Robert');
            $message->to('a.perrier721@gmail.com')->subject("Bienvenue Chez Robert");
        });
	});
});