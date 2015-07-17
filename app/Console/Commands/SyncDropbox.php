<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Dropbox\Service as Dropbox;

class SyncDropbox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:dropbox';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Dropbox files';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Dropbox $dropbox)
    {
        $dropbox->sync($this);
    }
}
