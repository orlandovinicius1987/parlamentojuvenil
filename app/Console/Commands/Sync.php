<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Dropbox\Service as Dropbox;

class Sync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dropbox:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

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
