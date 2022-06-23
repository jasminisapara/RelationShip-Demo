<?php

namespace App\Console\Commands;

use App\Jobs\TestEmailJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is clean a DB table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // DB::table('tests')->delete();
        $data['name'] = "jasmin";
        $data['email'] = "jasmin.arsenaltech@gmail.com"; 
        dispatch(new TestEmailJob($data));
        echo "Operation Done";
    }
}
