<?php

namespace Tejendra\Email;

use Illuminate\Support\ServiceProvider;

class TejendraEmailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/route.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'tejendra');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/config/tezz_mail.php'=>config_path('tezz_mail.php')
        ]);
    }
}
