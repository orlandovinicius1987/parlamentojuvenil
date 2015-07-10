<?php

namespace App\Services\Dropbox;

use GrahamCampbell\Dropbox\Facades\Dropbox;

class Service
{
	private $dropboxFiles = [];

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
		$local = storage_path(env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR . $this->getBaseDir());

		$dropbox = $this->getAllFilesFromDropbox(DIRECTORY_SEPARATOR . $this->getBaseDir());

		dd($dropbox);
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

		dd($this->dropboxFiles);
	}
}
