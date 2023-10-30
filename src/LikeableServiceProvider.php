<?php

namespace Alibayat\Likeable;

use Illuminate\Support\ServiceProvider;

class LikeableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->publishes([
            realpath(__DIR__ . '/../migrations') => database_path('migrations')
        ], 'migrations');
    }

    public function registerّ()
    {
    }
}
