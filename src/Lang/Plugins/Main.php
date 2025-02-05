<?php

namespace JamilTech\IndonesianTranslation\Lang\Plugins;

use JamilTech\IndonesianTranslation\PluginProvider;
use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/lang';

    protected string $version = '^15.10';

    public function files(): array
    {
        return (new PluginProvider([
            \LaravelLang\Lang\Plugins\Breeze\Master::class,
            \LaravelLang\Lang\Plugins\Breeze\V2::class,
            \LaravelLang\Lang\Plugins\Cashier\Stripe\Master::class,
            \LaravelLang\Lang\Plugins\Cashier\Stripe\V15::class,
            \LaravelLang\Lang\Plugins\Fortify\Master::class,
            \LaravelLang\Lang\Plugins\Fortify\V1::class,
            \LaravelLang\Lang\Plugins\Jetstream\Master::class,
            \LaravelLang\Lang\Plugins\Jetstream\V5::class,
            \LaravelLang\Lang\Plugins\Laravel\Master::class,
            \LaravelLang\Lang\Plugins\Laravel\V11::class,
            \LaravelLang\Lang\Plugins\Nova\LogViewer\Main::class,
            \LaravelLang\Lang\Plugins\Nova\V4::class,
            \LaravelLang\Lang\Plugins\Nova\V5::class,
            \LaravelLang\Lang\Plugins\Nova\DuskSuite\Main::class,
            \LaravelLang\Lang\Plugins\Spark\Paddle::class,
            \LaravelLang\Lang\Plugins\Spark\Stripe::class,
            \LaravelLang\Lang\Plugins\UI\Master::class,
            \LaravelLang\Lang\Plugins\UI\V4::class,
        ]))->getFiles();
    }
}
