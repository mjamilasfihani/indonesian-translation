<?php

namespace JamilAsfi\IndonesianTranslation\Lang;

use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'mjamilasfihani/indonesian-translation';

    protected string $base_path = __DIR__.'/../../lang/lang/';

    protected array $plugins = [Plugins\Main::class];
}
