<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        //User
        Blade::component('user.components.banner', 'banner');
        Blade::component('user.components.top_section', 'top_section');

        //Admin
        Blade::component('admin.components.modal', 'modal');
        Blade::component('admin.components.content-header', 'contentHeader');
    }
}
