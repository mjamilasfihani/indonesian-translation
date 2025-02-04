<?php

namespace JamilTech\IndonesianTranslation;

use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * The plugin mappings for the translation.
     *
     * @var array<class-string, class-string>
     */
    protected $plugins = [
        \LaravelLang\Actions\Plugin::class => Actions\Plugin::class,
        \LaravelLang\Attributes\Plugin::class => Attributes\Plugin::class,
        \LaravelLang\HttpStatuses\Plugin::class => HttpStatuses\Plugin::class,
        \LaravelLang\Lang\Plugin::class => Lang\Plugin::class,
    ];

    /**
     * Register any translation services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPlugins();
    }

    /**
     * Register the translation's plugins.
     *
     * @return void
     */
    public function registerPlugins()
    {
        foreach ($this->plugins() as $package => $plugin) {
            if (class_exists($package)) {
                $this->app->register($plugin);
            }
        }
    }

    /**
     * Get the plugins defined on the provider.
     *
     * @return array<class-string, class-string>
     */
    public function plugins()
    {
        return $this->plugins;
    }
}
