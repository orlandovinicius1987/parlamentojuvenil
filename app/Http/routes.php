<?php

use App\Data\Entities\State;
use App\Data\Entities\School;
use App\Services\News\Service as NewsSync;

/*
 * Main route
 */
Route::get('/{year?}', ['as' => 'home', 'uses' => 'Home@index'])->where('year', '\d{4}');

/*
 * Auth
 */
Route::group(['prefix' => '/auth'], function ()
{
    Route::get('/login', ['as' => 'auth.index', 'uses' => 'Auth@index']);
    Route::post('/login', ['as' => 'auth.post', 'uses' => 'Auth@post']);

    /*
     * Social
     */
    Route::group(['prefix' => 'social'], function ()
    {
        Route::get('/login/{socialNetwork}', ['as' => 'auth.social.redirect', 'uses' => 'SocialAuthController@login']);
        Route::get('/auth/{socialNetwork}/callback', 'SocialAuthController@socialNetworkCallback');
        Route::post('/afterRedirectForm', 'SocialAuthController@afterRedirect');
    });
});

Route::group(['prefix' => '/subscribe', 'middleware' => 'auth'], function ()
{
    Route::get('/', ['as' => 'subscribe.index', 'uses' => 'Subscriptions@index']);
});

Route::get('news/sync', function (NewsSync $news)
{
	return $news->sync();
});

Route::get('cities', function ()
{
	return State::where('code', 'RJ')->first()->cities()->orderBy('name')->get();
});

Route::get('schools/{city}',['middleware' => 'cors', function ($city)
{
    $city = mb_strtoclean($city);

	return School::where('city', '~*', strtoupper($city))->orderBy('name')->get();
}]);

Route::get('download/{file}', ['as' => 'download', 'uses' => function ($file)
{
	$path = env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR .
			env('BASE_DIR') . DIRECTORY_SEPARATOR .
			env('SITE_DIR') . DIRECTORY_SEPARATOR;

	return response()->download(public_path($path).$file);
}]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function ()
{
    Route::get('/', ['as' => 'admin.home', 'uses' => function() {
        return redirect()->route('admin.subscriptions');
    }]);

	Route::get('subscriptions', ['as' => 'admin.subscriptions', 'uses' => 'Admin@index']);

	Route::get('schools', ['as' => 'admin.schools', 'uses' => 'Admin@schools']);

    Route::get('elected', ['as' => 'admin.elected', 'uses' => 'Admin@elected']);

	Route::get('{city}', ['as' => 'admin.city', 'uses' => 'Admin@city']);

    Route::get('training/{subscription}', ['as' => 'admin.training', 'uses' => 'Admin@training']);
});

Route::get('auth.logout', ['as' => 'auth.logout', 'uses' => function ()
{
	return view('admin.index');
}]);

Route::get('subscriptions', ['as' => 'subscriptions', 'uses' => 'Subscriptions@byState']);

Route::get('subscriptions/schools', ['as' => 'subscriptions.schools', 'uses' => 'Subscriptions@bySchool']);

Route::get('subscriptions/students', ['as' => 'subscriptions.students', 'uses' => 'Subscriptions@byStudent']);

Route::post('subscriptions', ['as' => 'subscriptions.store', 'uses' => 'Subscriptions@store']);

Route::post('subscriptions/start', ['as' => 'subscriptions.start', 'uses' => 'Subscriptions@start']);

Route::get('subscriptions/download', ['as' => 'subscriptions.download', 'uses' => 'Subscriptions@download']);

Route::get('subscriptions/ignore/{id}', ['as' => 'subscriptions.ignore', 'uses' => 'Subscriptions@ignore']);

Route::get('subscriptions/edit/{id}', ['as' => 'subscriptions.edit', 'uses' => 'Subscriptions@edit']);

Route::post('subscriptions/edit/{id}', ['as' => 'subscriptions.edit', 'uses' => 'Subscriptions@update']);

Route::get('inscricao', ['as' => 'subscriptions.index', 'uses' => 'Subscriptions@index']);

Route::group(['prefix' => 'api/v1'], function ()
{
    Route::get('timeline/{year}', ['as' => 'api.timeline', 'uses' => 'Api@getTimeline']);

    Route::get('congressmen/{year}', ['as' => 'api.congressmen', 'uses' => 'Api@getCongressmen']);
});

Route::get('article/{id}', ['as' => 'article.show', 'uses' => 'News@showArticle']);

// Year pages
Route::get('{year}/training', ['as' => 'training.index', 'uses' => 'Training@index'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::post('{year}/training', ['as' => 'training.login', 'uses' => 'Training@login'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/training/content', ['as' => 'training.content', 'uses' => 'Training@content'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/training/watch/{video}', ['as' => 'training.watch', 'uses' => 'Training@watch'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/training/download/{document}', ['as' => 'training.download', 'uses' => 'Training@download'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/training/logout', ['as' => 'training.download', 'uses' => 'Training@logout'])->where('year', '[0-9][0-9][0-9][0-9]');

Route::get('{year}/quiz', ['as' => 'quiz.index', 'uses' => 'Quiz@index'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/quiz/result', ['as' => 'quiz.result', 'uses' => 'Quiz@result'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/quiz/{id}/questions', ['as' => 'quiz.questions', 'uses' => 'Quiz@questions'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/quiz/{id}/answer/{number}/{answer}', ['as' => 'quiz.answer', 'uses' => 'Quiz@answer'])->where('year', '[0-9][0-9][0-9][0-9]');
Route::get('{year}/quiz/result/{id}', ['as' => 'quiz.result', 'uses' => 'Quiz@result'])->where('year', '[0-9][0-9][0-9][0-9]');

Route::get('{year}', ['as' => 'edition', 'uses' => 'Pages@edition'])->where('year', '[0-9][0-9][0-9][0-9]');;

Route::get('{year}/gallery', ['as' => 'page.gallery', 'uses' => 'Pages@gallery']);
Route::get('{year}/news', ['as' => 'page.news', 'uses' => 'Pages@news']);

Route::get('{year}/members', ['as' => 'page.members', 'uses' => 'Pages@members']);
Route::get('{year}/clipping', ['as' => 'page.clipping', 'uses' => 'Pages@clipping']);
