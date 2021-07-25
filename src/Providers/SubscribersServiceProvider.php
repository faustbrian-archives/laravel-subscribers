<?php

declare(strict_types=1);

/*
 * This file is part of konceiver/laravel-subscribers.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Subscribers\Providers;

use Illuminate\Support\ServiceProvider;

class SubscribersServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/subscribers.php', 'subscribers');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/subscribers.php' => $this->app->configPath('subscribers.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../../database/migrations/' => $this->app->databasePath('migrations'),
            ], 'migrations');
        }
    }
}
