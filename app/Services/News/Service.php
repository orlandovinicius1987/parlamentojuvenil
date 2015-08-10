<?php

namespace App\Services\News;

use DB;
use Carbon\Carbon;
use App\Base\Sync;
use App\Data\Entities\Article;
use Illuminate\Database\Eloquent\Collection;

class Service extends Sync
{
	public function sync($console = null)
	{
		$this->log('News syncing...', $console);

		$this->storeNews($this->readNews($console));

		$this->log('News synced.', $console);
	}

	private function storeNews($articles)
	{
		if ($this->isCached($articles))
		{
			return false;
		}

		DB::transaction(function () use ($articles)
		{
			Article::truncate();

			$this->createArticles($articles);
		});

		return $articles;
	}

	private function readNews($console = null)
	{
		$articles = json_decode(
			file_get_contents(
				env('NEWS_SERVICE_URL')
			),
			true
		);

		if ($articles['erro'])
		{
			$this->log('News syncing aborted: error '.$articles['erro'].' - '.$articles['status'], $console);

			return false;
		}

		if ($articles = $articles['conteudo'])
		{
			foreach ($articles as $key => $article)
			{
				$articles[$key]['texto'] = base64_decode($articles[$key]['texto']);
				$articles[$key]['titulo'] = htmlentities($articles[$key]['titulo']);
				$articles[$key]['chamada'] = htmlentities($articles[$key]['chamada']);
			}

			return $articles;
		}

		return [];
	}

	private function convertToCarbon($date)
	{
		$format = strlen($date) > 10 ? 'd/m/Y H:i:s' : 'd/m/Y';

		return Carbon::createFromFormat($format, $date);
	}

	private function generateArticle($article)
	{
		return [
			'code' => $article['idConteudo'],
			'heading' => utf8_encode($article['titulo']),
			'subheading' => utf8_encode($article['chamada']),
			'body' => utf8_encode($article['texto']),
			'edition' => $article['edicao'],
			'image' => $article['img_destaque'],
			'date' => $this->convertToCarbon($article['data'])->toDateString(),
			'published_at' => $this->convertToCarbon($article['data_pub'])->toDateTimeString(),
			'featured' => $article['destaque'] == 'S',
			'youtube_url' => $article['url_youtube'],
		];
	}

	private function createArticles($articles)
	{
		foreach ($articles as $article)
		{
			Article::create($this->generateArticle($article));
		}
	}

	public function getAll()
	{
		$collection = new Collection();

		foreach ($this->readNews() as $article)
		{
			$collection->add(new Article($article));
		}

		return $collection;
	}

	private function isCached($articles)
	{
		$articles = serialize($articles);

		$contents = '';

		if (file_exists($file = $this->getCachedPath()))
		{
			$contents = file_get_contents($file);
		}

		if ($contents !== $articles)
		{
			file_put_contents($file, $articles);

			return false;
		}

		return true;
	}

	public function getCachedPath()
	{
		return storage_path('app/cache').'news.json';
	}
}
