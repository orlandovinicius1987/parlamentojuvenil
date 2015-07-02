<?php

Route::get('/', function ()
{
	return view('welcome');
});

Route::get('dashboard', function ()
{
	return view('dashboard');
});

Route::post('googleforms', function ()
{
	$googleForm = app()->make('PragmaRX\GoogleForms\Client', ['15dAXRn7hdsLhrlDxalvDG6F4ISHQbT4duG2lwl6OAHY']);

	$data = [
		'entry.386548658' => Input::get('name'),
		'entry.361290697' => Input::get('city'),
		'entry.740093423' => Input::get('school'),
		'entry.1928496279' => Input::get('email'),
		'entry.494802185' => Input::get('phone'),
	];

	return [
		'success' => $googleForm->post($data)
	];
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
