<?php

namespace Abhitheawesomecoder\Laraveleditprofile;

use Illuminate\Support\ServiceProvider;

class EditprofileServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {    
         $this->loadViewsFrom(__DIR__.'/views', 'laraveleditprofile');

         /*$this->publishes([
         __DIR__.'/migrations' =>  database_path('/migrations')
        ], 'migrations');*/
         $this->publishes([
        __DIR__.'/views' =>  base_path('resources/views/abhitheawesomecoder/laravel-edit-profile')
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Abhitheawesomecoder\Laraveleditprofile\EditprofileController');
    }
}
