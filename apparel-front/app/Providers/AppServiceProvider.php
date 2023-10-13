<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PhpMqtt\Client\Facades\MQTT;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Log::info('ok');
        // MQTT
        $mqtt = MQTT::connection();
        $mqtt->subscribe('#', function (string $topic, string $message) {
            Log::info('topic :', $message);
            Log::info('message :', $topic);
        }, 1);
        // Log::info('mqtt', $mqtt);
        // $mqtt->loop(true);
    }
}
