<?php

use App\Data\Entities\State;
use App\Data\Entities\School;
use App\Data\Entities\Subscription;
use App\Events\SubscriptionUpdated;
use App\Services\News\Service as NewsSync;

Route::get('seed', ['as' => 'seed', 'uses' => function()
{
//    Artisan::call('pj:school');
//    Artisan::call('pj:school:missing');
//    Artisan::call('pj:school:export');
//    Artisan::call('pj:geolocate');
    Artisan::call('db:seed');
}]);

Route::get('old', ['as' => 'home', 'uses' => 'Home@index']);
Route::get('/', ['as' => 'home', 'uses' => 'Home@breno']);
Route::get('register', ['as' => 'home', 'uses' => 'Home@force']);

Route::get('{year}', ['as' => 'home', 'uses' => 'Pages@edition'])->where('name', '[0-9][0-9][0-9][0-9]');;
Route::get('{year}/gallery', ['as' => 'page.gallery', 'uses' => 'Pages@gallery']);
Route::get('{year}/news', ['as' => 'page.news', 'uses' => 'Pages@news']);
Route::get('{year}/members', ['as' => 'page.members', 'uses' => 'Pages@members']);
Route::get('{year}/clipping', ['as' => 'page.clipping', 'uses' => 'Pages@clipping']);

// Must be last
Route::get('{page}', ['as' => 'home', 'uses' => 'Home@page']);

Route::post('googleforms', function ()
{
	$googleForm = app()->make('PragmaRX\GoogleForms\Client', [env('GOOGLE_FORM_ID')]);

	$data = [
		'entry.1067191032' => Input::get('name'),
		'entry.241756608' => Input::get('social_name'),
		'entry.1515803741' => Input::get('city'),
		'entry.1729603304' => Input::get('school'),
		'entry.1245049158' => Input::get('registration'),
		'entry.961396682' => Input::get('gender'),
		'entry.577472491' => Input::get('gender2'),
		'entry.399325260' => Input::get('birthdate'),
		'entry.684294614' => Input::get('cpf'),
		'entry.1502137399' => Input::get('id_number'),
		'entry.1488078719' => Input::get('id_issuer'),
		'entry.2091843943' => Input::get('email'),
		'entry.568742235' => Input::get('phone_home'),
		'entry.1791282094' => Input::get('phone_cellular'),
		'entry.872267792' => Input::get('zip_code'),
		'entry.561604981' => Input::get('address'),
		'entry.1580835599' => Input::get('address_complement'),
		'entry.96167830' => Input::get('address_neighborhood'),
		'entry.104131737' => Input::get('address_city'),
		'entry.1153024190' => Input::get('facebook'),
	];

	$subscription = new Subscription();

	$input = Input::only($subscription->getFillable());

	$subscription = Subscription::firstOrCreate($input);

	app('events')->fire(new SubscriptionUpdated($subscription));

	return [
		'success' => $googleForm->post($data),
		'data' => $data
	];
});

Route::any('news/sync', function (NewsSync $news)
{
	return $news->sync();
});

Route::any('cities', function ()
{
	return State::where('code', 'RJ')->first()->cities()->orderBy('name')->get();
});

Route::any('schools/{city}', function ($city)
{
	return School::where('city', '~*', strtoupper($city))->orderBy('name')->get();
});

Route::get('download/{file}', ['as' => 'download', 'uses' => function ($file)
{
	$path = env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR .
			env('BASE_DIR') . DIRECTORY_SEPARATOR .
			env('SITE_DIR') . DIRECTORY_SEPARATOR;

	return response()->download(public_path($path).$file);
}]);

Route::any('dados', function ($city)
{
	$all = Subscription::all();

	foreach ($all as $person)
	{

	}
});

Route::group(['prefix' => 'admin'], function ()
{
	Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin@index']);

	Route::get('schools', ['as' => 'admin.schools', 'uses' => 'Admin@schools']);

	Route::get('{city}', ['as' => 'admin.city', 'uses' => 'Admin@city']);
});


Route::get('auth.logout', ['as' => 'auth.logout', 'uses' => function ()
{
	return view('admin.index');
}]);

Route::get('subscriptions', ['as' => 'subscriptions', 'uses' => 'Subscriptions@byState']);

Route::get('subscriptions/download', ['as' => 'subscriptions.download', 'uses' => 'Subscriptions@download']);

Route::get('subscriptions/ignore/{id}', ['as' => 'subscriptions.ignore', 'uses' => 'Subscriptions@ignore']);
