<?php

namespace JamilTech\IndonesianTranslation;

use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * @var array<class-string, class-string>
     */
    protected $plugins = [];

    /**
     * @return void
     */
    public function register()
    {
        $this->registerPlugins();
    }

    /**
     * @return void
     */
    public function registerPlugins()
    {
        foreach ($this->plugins() as $skeleton => $modifier) {
            if (class_exists($skeleton)) {
                $this->app->register($modifier);
            }
        }
    }

    /**
     * @return array<class-string, class-string>
     */
    public function plugins()
    {
        return $this->plugins;
    }
}
