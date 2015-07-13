<?php

namespace App\Services\Filesystem;

use Storage;
use League\Flysystem\Plugin\ListFiles;

class Service
{
	/**
	 * @var \Illuminate\Contracts\Filesystem\Filesystem
	 */
	private $filesystem;

	public function __construct()
	{
		$this->initialize();
	}

	public function getBaseDir()
	{
		return env('BASE_DIR');
	}

	private function initialize()
	{
		$this->filesystem = Storage::disk('public');

		$this->filesystem->addPlugin(new ListFiles());
	}

	public function __call($name, $arguments)
	{
		$arguments = ! is_array($arguments) ? [$arguments] : $arguments;

		return call_user_func_array([$this->filesystem, $name], $arguments);
	}

	public function allFiles($from)
	{
		return $this->filesystem->files($from);
	}

	public function allLinks($from)
	{
		$files = $this->filesystem->allFiles($this->getBaseDir() . DIRECTORY_SEPARATOR . $from);

		foreach ($files as $key => $file)
		{
			$files[$key] = url(
				env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR .
				$file
			);
		}

		return $files;
	}
}
