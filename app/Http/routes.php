<?php

use App\Data\Entities\State;
use App\Data\Entities\School;
use App\Services\Dropbox\Service as Dropbox;

Route::get('/', ['as' => 'home', 'uses' => 'Home@index']);

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

Route::get('dropbox', function (Dropbox $dropbox)
{
	$links = $dropbox->photos();

	dd($links);

	return view('images')->with('links', $links);
});

Route::any('dropbox/sync', function (Dropbox $dropbox)
{
	return $dropbox->sync();
});

Route::any('cities', function (Dropbox $dropbox)
{
	return State::where('code', 'RJ')->first()->cities()->orderBy('name')->get();
});

Route::any('schools/{city}', function ($city)
{
	return School::where('city', '~*', strtoupper($city))->orderBy('name')->get();
});
