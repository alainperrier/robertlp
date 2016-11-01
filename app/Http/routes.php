<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', [
	    'as' => 'index', 'uses' => 'HomeController@index'
	]);
	Route::post('/', [
	    'as' => 'store', 'uses' => 'HomeController@store'
	]);

	Route::get('/contact', function () {
    	Mail::send('emails.welcome', ['email' => $email], function ($message) use ($email) {
            $message->from('contact@chez-robert.fr', 'Chez Robert');
            $message->sender('contact@chez-robert.fr', 'Chez Robert');
            $message->to($email)->subject("Bienvenue Chez Robert");
        });
	});
});