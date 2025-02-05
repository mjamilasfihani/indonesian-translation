<?php

namespace JamilAsfi\IndonesianTranslation\Actions\Plugins;

use JamilAsfi\IndonesianTranslation\PluginProvider;
use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/actions';

    protected string $version = '^1.0';

    public function files(): array
    {
        return (new PluginProvider([
            \LaravelLang\Actions\Plugins\Main::class,
        ]))->getFiles();
    }
}
