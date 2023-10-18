<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DatabaseName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Show:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'will show the current database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('current database: ' . DB::connection()->getDatabaseName());
    }
}
