<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\support\facades\schemas;

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
        //set the 
       // schema::defaultstringLength(191);
    }
}
