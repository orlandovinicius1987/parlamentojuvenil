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

Route::post('googleforms', function ()
{
	
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

Route::post('subscriptions', ['as' => 'subscriptions.store', 'uses' => 'Subscriptions@store']);

Route::get('subscriptions/download', ['as' => 'subscriptions.download', 'uses' => 'Subscriptions@download']);

Route::get('subscriptions/ignore/{id}', ['as' => 'subscriptions.ignore', 'uses' => 'Subscriptions@ignore']);

Route::get('inscricao', ['as' => 'subscriptions.index', 'uses' => 'Subscriptions@index']);

// Year pages

Route::get('{year}', ['as' => 'home', 'uses' => 'Pages@edition'])->where('name', '[0-9][0-9][0-9][0-9]');;
Route::get('{year}/gallery', ['as' => 'page.gallery', 'uses' => 'Pages@gallery']);
Route::get('{year}/news', ['as' => 'page.news', 'uses' => 'Pages@news']);
Route::get('{year}/members', ['as' => 'page.members', 'uses' => 'Pages@members']);
Route::get('{year}/clipping', ['as' => 'page.clipping', 'uses' => 'Pages@clipping']);

// Must be last
Route::get('{page}', ['as' => 'home', 'uses' => 'Home@page']);
