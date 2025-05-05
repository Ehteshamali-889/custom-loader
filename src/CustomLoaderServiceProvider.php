<?php

namespace Ehteshamali\Loader;

use Illuminate\Support\ServiceProvider;

class CustomLoaderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $customModelPath = app_path('Custom.php');

        if (file_exists($customModelPath)) {
            require_once $customModelPath;
        } else {
            $this->publishes([
                __DIR__ . '/../Custom.php' => app_path('Custom.php'),
            ], 'custom-model');
        }
    }
}

