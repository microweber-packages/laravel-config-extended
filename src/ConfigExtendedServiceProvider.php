<?php

namespace MicroweberPackages\LaravelConfigExtended;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use MicroweberPackages\Config\Facades\ConfigExtended;


class ConfigExtendedServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides(): array
    {
        return ['config'];
    }

    public function register(): void
    {
        $this->app->instance('config', $config = new ConfigExtendedRepository($this->app));
        $this->app->alias('config', ConfigExtended::class);
    }
}
