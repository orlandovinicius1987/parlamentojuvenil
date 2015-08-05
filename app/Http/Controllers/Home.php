<?php

namespace App\Http\Controllers;

use App\Jobs\SyncNews;
use App\Services\News\Service as SyncNewsService;
use Carbon\Carbon;
use App\Data\Entities\State;
use App\Data\Entities\Article;
use App\Services\Filesystem\Service as Filesystem;
use App\Http\Controllers\Controller as BaseController;

class Home extends BaseController
{
	private $spreadsheet = 'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing';

	/**
	 * @var \App\Services\Filesystem\Service
	 */
	private $filesystem;

	/**
	 * @var SyncNewsService
	 */
	private $syncNewsService;

	public function __construct(Filesystem $filesystem, SyncNewsService $syncNewsService)
	{
		$this->filesystem = $filesystem;
		$this->syncNewsService = $syncNewsService;
	}

	public function index()
	{
		$this->dispatch(new SyncNews());

		header('X-Frame-Options: GOFORIT');

		return
			view('home')
				->with('spreadsheet', $this->spreadsheet)
				->with('congressmen', $this->getCongressmenLinks())
				->with('carrousel', $this->getTestimonials())
				->with('cities', $this->getCities())
				->with('newspapers', $this->getNewspapersLinks())
				->with('articles', $this->getArticles());
	}

	private function getCongressmenLinks()
	{
		$from7 = $this->filesystem->congressmenLinks(env('PHOTOS_DIR').DIRECTORY_SEPARATOR.'7ª edição (2013)');

		$from8 = $this->filesystem->congressmenLinks(env('PHOTOS_DIR').DIRECTORY_SEPARATOR.'8ª edição (2014)');

		shuffle($from7);
		shuffle($from8);

		return [
			7 => $from7,
		    8 => $from8,
		];
	}

	private function getCities()
	{
		return State::where('code', 'RJ')->first()->cities()->orderBy('name')->get();
	}

	private function getNewspapersLinks()
	{
		$files = $this->filesystem->allLinks(env('NEWSPAPERS_DIR'));
		$links = [];

		foreach ($files as $key => $file)
		{
			$parts = pathinfo($file);

			if ($parts['extension'] == 'pdf')
			{
				$name = explode('_', $parts['filename']);

				$links[] = [
					'year' => $name[0],
					'name' => $name[1] . ' ' . $name[2],
					'pdf' => $parts['dirname'] . '/' . $parts['filename'] . '.pdf',
					'jpg' => $parts['dirname'] . '/' . $parts['filename'] . '.jpg',
				];
			}
		}

		return $links;
	}

	private function getArticles()
	{
		$articles = Article::orderBy('published_at', 'descending')->get();

		foreach ($articles as $article)
		{
			if ($article->image)
			{
				$article->image = env('ARTICLE_IMAGE_URL_BASE').DIRECTORY_SEPARATOR.$article->image;
				$article->date = Carbon::createFromFormat('Y-m-d', $article->date)->format('d m Y');
			}
		}

		return $articles;
	}

	private function getTestimonials()
	{
		$file = file(public_path('files/apps/parlamentojuvenil/parlamentares/testemunhos-parlamentares-juvenis.txt'));

		$result = [];

		foreach ($file as $person)
		{
			$person = explode(';', $person);

			$city = pathinfo($person[1]);

			$city = explode('-', $city['filename']);

			$result[] = [
				'name' => $person[0],
				'photo' => url(
					env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR .
					env('BASE_DIR') . DIRECTORY_SEPARATOR .
					env('PHOTOS_DIR') . DIRECTORY_SEPARATOR .
					$person[1]
				),
				'editions' => $person[2],
				'city' => trim($city[1]),
				'testimonial' => $person[3],
			];
		}

		return $result;
	}
}
