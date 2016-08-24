<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/profile', 
	'UserController@showProfile')
->name('profile');

Route::get('juan', 
	'JuanCarlosController@juan')
->name('juan');