<?php

declare(strict_types = 1);

namespace RazorUi\BladeApplicationUi;

use Illuminate\Support\ServiceProvider;

class BladeApplicationUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'app-ui');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/app-ui'),
        ]);
    }
}