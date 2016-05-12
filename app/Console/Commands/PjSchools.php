<?php

namespace App\Console\Commands;

use SchoolsSeeder;
use Illuminate\Console\Command;

class PjSchools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:schools';

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
    public function handle()
    {
        $seeder = new SchoolsSeeder();

        $seeder->run();
    }
}
