<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind application contracts here; domain modules arrive in later phases.
    }

    public function boot(): void
    {
        // Global application bootstrapping belongs here, not in controllers.
    }
}
