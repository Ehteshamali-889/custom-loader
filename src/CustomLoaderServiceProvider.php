<?php

namespace Custom\Loader;

use Illuminate\Support\ServiceProvider;

class CustomLoaderServiceProvider extends ServiceProvider
{
    public function register()
    {
        // If needed, you could bind the model here
    }

    public function boot()
    {
        $customModelPath = app_path('Custom.php');
        
        if (file_exists($customModelPath)) {
            require_once $customModelPath;
        } else {
            // Optional: Publish a stub if Custom.php doesn't exist
            $this->publishes([
                __DIR__ . '/../Custom.php' => app_path('Custom.php'),
            ], 'custom-model');
        }
    }
}
