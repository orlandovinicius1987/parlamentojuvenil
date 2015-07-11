<?php

namespace App\Services\Dropbox;

use GrahamCampbell\Dropbox\Facades\Dropbox;
use Illuminate\Contracts\Filesystem\Filesystem;

class Service
{
	private $dropboxFiles = [];

	/**
	 * @var Filesystem
	 */
	private $fileSystem;

	public function __construct(Filesystem $fileSystem)
	{
		$this->fileSystem = $fileSystem;
	}

	public function photos()
	{
		return $this->files($this->getPhotosDir());
	}

	public function listing($directory, $isDirectory)
	{
		$files = $this->getAllFilesFromDropbox($directory);

		$links = [];

		foreach($files as $file)
		{
			if ($file['is_dir'] === $isDirectory)
			{
				$links[$file['path']] = Dropbox::createTemporaryDirectLink($file['path'])[0];
			}
		}

		return $links;
	}

	public function files($directory)
	{
		return $this->listing($directory, false);
	}

	public function directories($directory)
	{
		return $this->listing($directory, true);
	}

	public function createDirectories()
	{
		Dropbox::createFolder($this->photosDir);
		Dropbox::createFolder($this->videosDir);
	}

	public function sync()
	{
		foreach ($this->getAllFilesFromDropbox(DIRECTORY_SEPARATOR . $this->getBaseDir()) as $path)
		{
			foreach ($path['contents'] as $content)
			{
				$this->mkLocalDirectory($content);

				if ( ! $content['is_dir'])
				{
					$this->syncFile($content);
				}
			}
		}

		dd($this->dropboxFiles);
	}

	public function getBaseDir()
	{
		return env('BASE_DIR');
	}

	public function getPhotosDir()
	{
		return $this->getBaseDir() . DIRECTORY_SEPARATOR . env('PHOTOS_DIR');
	}

	private function getAllFilesFromDropbox($directory)
	{
		if ($files = Dropbox::getMetadataWithChildren($directory))
		{
			$this->dropboxFiles[$directory] = $files;

			foreach($files['contents'] as $file)
			{
				if ($file['is_dir'])
				{
					$this->getAllFilesFromDropbox($file['path']);
				}
			}
		}

		if ( ! $this->dropboxFiles)
		{
			return null;
		}

		return $this->dropboxFiles;
	}

	private function mkLocalDirectory($content)
	{
		if($content['is_dir'])
		{
			$this->fileSystem->makeDirectory($this->getLocalPath($content['path']), 755, true);
		}
	}

	private function getLocalPath($path)
	{
		return DIRECTORY_SEPARATOR . $path;
	}

	private function syncFile($file)
	{
		$link = $this->getDropboxFileLink($file);

		$contents = file_get_contents($link);

		if ( ! $this->fileSystem->exists($file['path']))
		{
			$this->fileSystem->put($this->getLocalPath($file['path']), $contents);
		}
	}

	private function getDropboxFileLink($content)
	{
		return Dropbox::createTemporaryDirectLink($content['path'])[0];
	}
}
