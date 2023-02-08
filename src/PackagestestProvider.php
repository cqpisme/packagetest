<?php


namespace Cqpisme\Packagestest;


use Closure;
use Illuminate\Support\ServiceProvider;

class PackagestestProvider extends ServiceProvider
{
    public function boot()
    {
       $this->publishes([
           __DIR__.'/config/packagetest.php' => config_path('packagetest.php'),
       ]);
    }

    public function register()
    {
        $this->app->singleton('packagetest',function(){
           return new PackagesTestService();
        });
    }
}
