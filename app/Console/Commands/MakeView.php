<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Making a custom view';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $resourcePath = resource_path('views');
        $viewPath = "$resourcePath/$name.blade.php";

        if (!file_exists($viewPath)) {
            file_put_contents($viewPath, '');
            $this->info("View generated successfully.");
        } else {
            $this->error("View already exists.");
        }
    }
}
