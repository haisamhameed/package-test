<?php

namespace HaisamHameed\HelloPackage;

use Illuminate\Support\ServiceProvider;
use HaisamHameed\HelloPackage\HelloPackage;
class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // This will run when the package is loaded
        if ($this->app->runningInConsole()) {
            $this->commands([
                // Here you can register package commands later
            ]);
        }
    }

    public function register()
    {
        // Bind any classes into the Laravel service container
        $this->app->singleton('hello', function () {
            return new HelloPackage();
        });
    }
}
