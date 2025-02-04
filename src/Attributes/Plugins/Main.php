<?php

namespace JamilTech\IndonesianTranslation\Attributes\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/attributes';

    protected string $version = '^2.5';

    public function files(): array
    {
        return [];
    }
}
