<?php

namespace App\Providers;

use App\Http\Controllers\PacController;
use App\Http\Controllers\KennyOmegaController;
use Illuminate\Support\ServiceProvider;

class WrestlerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            WrestlersControllerInterface::class,
            PacController::class,
            KennyOmegaController::class
        );
    }
}
