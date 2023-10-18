<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ShowUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show all user in a table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $header = ['id', 'name', 'email', 'password', 'created at', 'updated at'];
        $data = User::all();
        $this->table($header, $data);

        // $count = User::all()->toArray();
        // $this->output->progressStart(count($count));

        // for ($i = 0; $i < count($count); $i++) {
        //     sleep(1);
        //     $this->output->progressAdvance();
        // }
        // $this->output->progressFinish();
    }
}
