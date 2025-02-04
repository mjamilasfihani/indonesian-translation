<?php

namespace JamilTech\IndonesianTranslation\Actions\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/actions';

    protected string $version = '^1.0';

    public function files(): array
    {
        return [];
    }
}
