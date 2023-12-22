<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->httpsInProdOrGitpod();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private function httpsInProdOrGitpod()
    {
        if ($this->app->environment('production') || filled(env('GITPOD_VITE_URL'))) {
            URL::forceScheme('https');
        }
    }
}
