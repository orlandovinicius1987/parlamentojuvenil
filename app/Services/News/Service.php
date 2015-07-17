<?php

namespace App\Services\News;

use DB;
use Carbon\Carbon;
use App\Base\Sync;
use App\Data\Entities\Article;

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
		DB::transaction(function () use ($articles)
		{
			Article::truncate();

			foreach ($articles as $article)
			{
				Article::create([
					'code' => $article['idConteudo'],
					'heading' => $article['titulo'],
					'subheading' => $article['chamada'],
					'body' => $article['texto'],
					'edition' => $article['edicao'],
					'image' => $article['img_destaque'],
					'date' => $this->convertToCarbon($article['data'])->toDateString(),
					'published_at' => $this->convertToCarbon($article['data_pub'])->toDateTimeString(),
					'featured' => $article['destaque'] == 'S',
					'youtube_url' => $article['url_youtube'],
				]);
			}
		});
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

		$articles = $articles['noticias'];

		foreach ($articles as $key => $article)
		{
			$articles[$key]['texto'] = base64_decode($articles[$key]['texto']);
		}

		return $articles;
	}

	private function convertToCarbon($date)
	{
		$format = strlen($date) > 10 ? 'd/m/Y H:i:s' : 'd/m/Y';

		return Carbon::createFromFormat($format, $date);
	}
}
