<?php

namespace App\Http\Controllers;

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
				->with('congressmen', $this->getCongressmenLinks());
	}

	private function getCongressmenLinks()
	{
		return $this->filesystem->allLinks(env('PHOTOS_DIR'));
	}
}
