<?php

namespace App\Console\Commands;

use App\Services\News\Service;
use Illuminate\Console\Command;

class SyncNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync news';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Service $dropbox)
    {
        $dropbox->sync($this);
    }
}
