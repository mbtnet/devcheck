<?php

namespace Mbtnet\Devcheck\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Provider class for custom routes & booting
 */
class DevcheckProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'devcheck');
    }
}
