<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Carbon::macro('greetings', function () {
            $hour = date('H');
            if ($hour < 12) {
                return "Good Morning, ";
            }
            if ($hour < 17) {
                return "Good Afternoon, ";
            }
            return "Good Evening, ";
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        DB::whenQueryingForLongerThan(500, function (Connection $connection, QueryExecuted $event) {
//            $appName = config('app.name');
//            Log::critical(
//                "Hello Dev Team , i found a hungry query in $appName , here it is \n",
//                [
//                    'query' => $event->sql,
//                    'bindings' => $event->bindings,
//                    'time' => $event->time
//                ]
//            );
//        });
    }
}
