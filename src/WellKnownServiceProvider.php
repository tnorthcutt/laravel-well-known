<?php

namespace Tnorthcutt\WellKnown;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as Base;

class WellKnownServiceProvider extends Base
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/well-known.php' => config_path('well-known.php'),
        ]);

        Route::redirect('/.well-known/change-password', config('well-known.change-password'), 301);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/well-known.php',
            'well-known'
        );
    }
}