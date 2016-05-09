<?php

namespace App\Http\Controllers;

use \DB;
use App\Jobs\SyncNews;
use App\Jobs\SyncGallery;
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

	public function force()
	{
		return $this->index(true);
	}

	public function index($force = false)
	{
		return $this->showView('index', $force);
	}

	private function getCongressmenLinks()
	{
		$from7 = $this->filesystem->congressmenLinks(env('PHOTOS_DIR').DIRECTORY_SEPARATOR.'7a edicao (2013)');

		$from8 = $this->filesystem->congressmenLinks(env('PHOTOS_DIR').DIRECTORY_SEPARATOR.'8a edicao (2014)');

		/// will be sorted
		//		shuffle($from7);
		//		shuffle($from8);

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
		$links = $files['links'];
		$files = $files['files'];
		$result = [];

		foreach ($links as $key => $file)
		{
			$parts = pathinfo($file);

			if ($parts['extension'] == 'pdf' || $parts['extension'] == 'json')
			{
				$name = explode('_', $parts['filename']);

				$link = $this->makeLinkAttributes($files[$key], $name, $parts);

				$result[$key] = $link;
			}
		}

		return $result;
	}

	private function getArticles($operand, $year)
	{
		return $this->getArticlesForType($operand, $year, 'Notícias');
	}

	private function getGalleryLinks($edition)
	{
		return $this->getArticlesForType(null, null, 'Fotos', $edition);
	}

	private function getTestimonials()
	{
		$file = file(public_path('files/apps/parlamentojuvenil/parlamentares/testemunhos-parlamentares-juvenis.txt'));

		shuffle($file);

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

	/**
	 * @param $operand
	 * @param $year
	 * @return mixed
	 */
	private function getArticlesForType($operand, $year, $type, $edition = null)
	{
		$articles = Article::orderBy('published_at', 'descending')->where('type', $type);

		if ($year)
		{
			$articles->where(DB::raw('extract(year from published_at)'), $operand, $year);
		}

		if ($edition)
		{
			$articles->where('edition', $edition);
		}

		foreach ($articles = $articles->get() as $article)
		{
			if ($article->image)
			{
				$article->image = env('ARTICLE_IMAGE_URL_BASE') . DIRECTORY_SEPARATOR . $article->image;
				$article->date = Carbon::createFromFormat('Y-m-d', $article->date)->format('d m Y');
			}
		}

		return $articles;
	}

	private function makeLinkAttributes($file, $name, $parts)
	{
		$url = null;
		$pdf = null;

		if ($parts['extension'] == 'json')
		{
			$json = file_get_contents($file);

			$json = json_decode($json);

			$url = $json->url;
		}
		else
		{
			$pdf = $parts['dirname'] . '/' . $parts['filename'] . '.pdf';
		}

		$name = isset($name[2]) ? $name[1] . ' ' . $name[2] : $name[0];

		return [
			'year' => $name[0],
			'name' => $name,
			'pdf' => $pdf,
			'jpg' => $parts['dirname'] . '/' . $parts['filename'] . '.jpg',
		    'url' => $url
		];
	}

	public function breno()
	{
		return $this->showView('breno');
	}

	/**
	 * @param $force
	 * @return mixed
	 */
	public function showView($view, $force = false)
	{
		$this->dispatch(new SyncNews());
		$this->dispatch(new SyncGallery());

		header('X-Frame-Options: GOFORIT');

		$fourteenDate = (new Carbon())->subYears(14);
		$seventeenDate = (new Carbon())->subYears(18)->addDays(1);

		return
			view($view)
				->with('spreadsheet', $this->spreadsheet)
				->with('congressmen', $this->getCongressmenLinks())
				->with('carrousel', $this->getTestimonials())
				->with('cities', $this->getCities())
				->with('newspapers', $this->getNewspapersLinks())
				->with('gallery', $this->getGalleryLinks(9))
				->with('oldGallery', $this->getGalleryLinks(8))
				->with('oldArticles', $this->getArticles('<=', 2014))
				->with('newArticles', $this->getArticles('>=', 2015))
				->with('fourteenDate', $fourteenDate->format('d/m/Y'))
				->with('seventeenDate', $seventeenDate->format('d/m/Y'))
				->with('now', (string)\Carbon\Carbon::now()->subHours(3))
				->with('force', $force);
	}
}
