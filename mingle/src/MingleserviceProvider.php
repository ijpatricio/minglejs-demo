<?php

namespace Ijpatricio\Mingle;

use Illuminate\Support\ServiceProvider;

class MingleserviceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mingle');
    }
}
