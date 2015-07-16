<?php

namespace App\Services\Dropbox;

use Log;
use Artisan;
use Request;
use Rhumsaa\Uuid\Uuid;
use GrahamCampbell\Dropbox\Facades\Dropbox;
use App\Services\Filesystem\Service as Filesystem;
use App\Services\Dropbox\Data\Entities\Dropbox as DropboxModel;

class Service
{
	private $dropboxFiles = [];

	private $filesystem;

	private $uuid;

	public function __construct(Filesystem $filesystem)
	{
		$this->filesystem = $filesystem;

		$this->initialize();
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

	public function sync($command)
	{
		if ($challenge = Request::get('challenge'))
		{
			Log::info($message = 'Dropbox challenge: ' . $challenge);

			if ($command)
			{
				$command->comment($message);
			}

			return $challenge;
		}

		Log::info($message = 'Dropbox sync...');

		if ($command)
		{
			$command->comment($message);
		}

		foreach ($this->getAllFilesFromDropbox(DIRECTORY_SEPARATOR . $this->filesystem->getBaseDir()) as $path)
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

		$this->deleteMissingFiles();

		Log::info($message = 'Dropbox sync finished.');

		if ($command)
		{
			$command->comment($message);
		}

		return ['success' => true];
	}

	public function getPhotosDir()
	{
		return $this->filesystem->getBaseDir() . DIRECTORY_SEPARATOR . env('PHOTOS_DIR');
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
		if ($content['is_dir'])
		{
			$this->filesystem->makeDirectory($this->getLocalPath($content['path']), 755, true);
		}
	}

	private function getLocalPath($path)
	{
		return DIRECTORY_SEPARATOR . $path;
	}

	private function syncFile($file)
	{
		if ( ! $this->filesystem->exists($file['path']) || $this->isNewRevision($file))
		{
			$link = $this->getDropboxFileLink($file);

			$contents = file_get_contents($link);

			$this->filesystem->put($this->getLocalPath($file['path']), $contents);
		}

		$this->updateRevision($file);
	}

	private function getDropboxFileLink($content)
	{
		return Dropbox::createTemporaryDirectLink($content['path'])[0];
	}

	private function initialize()
	{
		$this->makeUuid();

		$this->createDatabase();

		$this->migrate();
	}

	private function isNewRevision($file)
	{
		$model = $this->findDropboxModel($file);

		return $model ? (string) $model->revision != (string) $file['revision'] : true;
	}

	private function updateRevision($file)
	{
		if ( ! $model = $this->findDropboxModel($file))
		{
			$model = new DropboxModel();

			$model->file = $file['path'];
		}

		$model->revision = $file['revision'];

		$model->uuid = $this->uuid;

		$model->save();
	}

	private function findDropboxModel($file)
	{
		$file = $file['path'];

		$file = ! starts_with($file, DIRECTORY_SEPARATOR) ? DIRECTORY_SEPARATOR . $file : $file;

		return DropboxModel::where('file', $file)->first();
	}

	private function makeUuid()
	{
		$this->uuid = (string) Uuid::uuid4();
	}

	private function createDatabase()
	{
		if (!file_exists(env('DB_PATH')))
		{
			file_put_contents(env('DB_PATH'), '');
		}
	}

	private function migrate()
	{
		Artisan::call('migrate');
	}

	private function deleteMissingFiles()
	{
		$missing = DropboxModel::where('uuid', '!=', $this->uuid)->get();

		foreach($missing as $file)
		{
			if ($this->filesystem->exists($file->file))
			{
				$this->filesystem->delete($file->file);
			}

			$file->delete();
		}

		foreach($this->listLocalFiles() as $file)
		{
			if ( ! $this->findDropboxModel($file))
			{
				$this->filesystem->delete($file['path']);
			}
		}
	}

	private function listLocalFiles()
	{
		return $this->filesystem->listFiles($this->filesystem->getBaseDir(), true);
	}

}
