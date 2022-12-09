<?php

declare(strict_types=1);

namespace Rintoug\LaravelAdmin\Providers;

use Rintoug\LaravelAdmin\Http\Middleware\IsAdmin;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

final class LaravelAdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

        // Loading migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');


        // Loading routes
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        // Route middleware
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('is-admin', IsAdmin::class);

        // Views
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'laravel-admin');

        // Publish views
        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__.'/../../resources/views' => resource_path('views/vendor/laravel-admin'),
            ], 'views');

        }
    }
}
