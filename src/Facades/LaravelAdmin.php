<?php

namespace Rintoug\LaravelAdmin\Facades;

use Illuminate\Support\Facades\Facade;


class LaravelAdmin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-admin';
    }
}
