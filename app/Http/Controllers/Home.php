<?php

namespace App\Http\Controllers;

use App\Data\Entities\State;
use App\Services\Filesystem\Service as Filesystem;
use App\Http\Controllers\Controller as BaseController;

class Home extends BaseController
{
	private $spreadsheet = 'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing';

	/**
	 * @var \App\Services\Filesystem\Service
	 */
	private $filesystem;

	public function __construct(Filesystem $filesystem)
	{
		$this->filesystem = $filesystem;
	}

	public function index()
	{
		return
			view('home')
				->with('spreadsheet', $this->spreadsheet)
				->with('congressmen', $this->getCongressmenLinks())
				->with('cities', $this->getCities())
				->with('newspapers', $this->getNewspapersLinks());
	}

	private function getCongressmenLinks()
	{
		return $this->filesystem->allLinks(env('PHOTOS_DIR'));
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
}
