<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// hanya jika error di windows
// use Illuminate\Support\Facades\Schema;

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
        /** 
        * Hanya Jika Error di Windows
        *   
        */
        // Schema::defaultStringLength(255);
    }
}
