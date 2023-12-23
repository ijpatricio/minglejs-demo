<?php

namespace App\Mingle;

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
        $this->loadViewsFrom(base_path('/resources/mingle-views'), 'mingle');
    }
}
