<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\NavigationComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['index-frontend','layouts.frontend.main'], NavigationComposer::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
