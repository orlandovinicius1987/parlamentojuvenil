<?php

Route::get('/', function ()
{
	return
		view('welcome')
			->with('spreadsheet',
			       'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing'
			);
});

Route::get('dashboard', function ()
{
	return view('dashboard');
});

Route::post('googleforms', function ()
{
	$googleForm = app()->make('PragmaRX\GoogleForms\Client', ['1EAISVwTNYtzdYKl1MSYdVF7TggUH-C-ExBuZ-rl2pH0']);

	$data = [
		'entry.2098780884' => Input::get('name'),
		'entry.1662563875' => Input::get('city'),
		'entry.236501095' => Input::get('school'),
		'entry.824983865' => Input::get('email'),
		'entry.845873546' => Input::get('phone'),
	];

	return [
		'success' => $googleForm->post($data),
		'data' => $data
	];
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
