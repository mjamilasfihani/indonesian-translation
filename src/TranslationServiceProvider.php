<?php

namespace JamilTech\IndonesianTranslation;

use Illuminate\Support\ServiceProvider;
use LaravelLang\Actions\Plugin as ActionsPlugin;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * The plugin mappings for the translation.
     *
     * @var array<class-string, class-string>
     */
    protected $plugins = [
        ActionsPlugin::class => Actions\Plugin::class,
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
        foreach ($this->plugins() as $origin => $plugin) {
            if (class_exists($origin)) {
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
