<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //fuente: https://laravel-news.com/laravel-5-4-key-too-long-error

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
         //fuente: https://laravel-news.com/laravel-5-4-key-too-long-error
          Schema::defaultStringLength(191);
    }
}
