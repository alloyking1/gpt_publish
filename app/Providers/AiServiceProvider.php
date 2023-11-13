<?php

namespace App\Providers;

use Exception;
use App\Http\Services\GoogleAiApi;
use App\Http\Services\ChatGptApi;
use Illuminate\Support\ServiceProvider;
use App\Http\Services\AiServiceInterface;

class AiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AiServiceInterface::class,
            function ($app) {
                $driver = config('services.aiDriver');

                if ($driver == 'chatGpt') {
                    return new ChatGptApi();
                }

                if ($driver == 'googleAi') {
                    return new GoogleAiApi();
                }

                throw new Exception('Invalid Ai driver');
            }
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
