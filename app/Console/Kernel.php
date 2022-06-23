<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\TestEmailJob;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $data['name'] = "jasmin"; //$request->name
        $data['email'] = "jasmin.arsenaltech@gmail.com"; //
        // // $schedule->command('inspire')->hourly();
        // // $schedule->call(function($data){
        // //     TestEmailJob::dispatch($data);
        // // })->everyMinute();
        // $schedule->job(new TestEmailJob($data))->everyMinute();

        $schedule->command('minute:update')->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
