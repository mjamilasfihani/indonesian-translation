<?php

namespace JamilAsfi\IndonesianTranslation\HttpStatuses;

use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'mjamilasfihani/indonesian-translation';

    protected string $base_path = __DIR__.'/../../lang/http-statuses/';

    protected array $plugins = [Plugins\Main::class];
}
