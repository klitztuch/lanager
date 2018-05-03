<?php

namespace Zeropingheroes\Lanager\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Zeropingheroes\Lanager\Console\Commands\SteamImportApps;
use Zeropingheroes\Lanager\Console\Commands\SteamImportUserApps;
use Zeropingheroes\Lanager\Console\Commands\SteamImportUsers;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command(SteamImportUsers::class)
                  ->everyMinute();

         $schedule->command(SteamImportApps::class)
                  ->dailyAt('6:00');

         $schedule->command(SteamImportUserApps::class)
                  ->everyFifteenMinutes();
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
