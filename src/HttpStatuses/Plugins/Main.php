<?php

namespace JamilAsfi\IndonesianTranslation\HttpStatuses\Plugins;

use JamilAsfi\IndonesianTranslation\PluginProvider;
use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/http-statuses';

    protected string $version = '^3.5';

    public function files(): array
    {
        return (new PluginProvider([
            \LaravelLang\HttpStatuses\Plugins\Main::class,
        ]))->getFiles();
    }
}
