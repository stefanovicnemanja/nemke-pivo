<?php

namespace Nemke\Pivo\App\Providers;

use Illuminate\Support\ServiceProvider;

class PivoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'pivo');
    }
}