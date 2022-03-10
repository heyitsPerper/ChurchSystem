<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//paginator to make pages in a table
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //nag add ko ug paginator
        Paginator::useBootstrap();
    }
}
