<?php

namespace JamilAsfi\IndonesianTranslation\Attributes\Plugins;

use JamilAsfi\IndonesianTranslation\PluginProvider;
use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/attributes';

    protected string $version = '^2.5';

    public function files(): array
    {
        return (new PluginProvider([
            \LaravelLang\Attributes\Plugins\Laravel::class,
            \LaravelLang\Attributes\Plugins\Lumen::class,
        ]))->getFiles();
    }
}
