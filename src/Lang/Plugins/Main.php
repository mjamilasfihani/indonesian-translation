<?php

namespace JamilTech\IndonesianTranslation\Lang\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    protected ?string $vendor = 'laravel-lang/lang';

    protected string $version = '^15.10';

    public function files(): array
    {
        return [];
    }
}
