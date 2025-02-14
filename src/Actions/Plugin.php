<?php

namespace JamilAsfi\IndonesianTranslation\Actions;

use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'mjamilasfihani/indonesian-translation';

    protected string $base_path = __DIR__.'/../../lang/actions/';

    protected array $plugins = [Plugins\Main::class];
}
