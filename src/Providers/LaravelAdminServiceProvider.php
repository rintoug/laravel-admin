<?php

declare(strict_types=1);

namespace Rintoug\LaravelAdmin\Providers;

use Illuminate\Support\ServiceProvider;

final class LaravelAdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        //dd(1);
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}
