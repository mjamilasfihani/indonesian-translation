<?php

namespace JamilTech\IndonesianTranslation\Actions;

use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'mjamilasfihani/indonesian-translation';

    protected string $base_path = __DIR__.'/../../laravel-lang/';

    protected array $plugins = [Plugins\Main::class];
}
