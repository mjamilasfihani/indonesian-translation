<?php

namespace JamilAsfi\IndonesianTranslation;

class PluginProvider
{
    /**
     * Instance of Files.
     *
     * @var array
     */
    protected $files = [];

    /**
     * Constructor.
     *
     * @param  class-string<\LaravelLang\Publisher\Plugins\Plugin>[]  $plugins
     * @return void
     */
    public function __construct($plugins)
    {
        foreach ($plugins as $plugin) {
            if (($object = (new $plugin))->has()) {
                $this->files += $object->files();
            }
        }
    }

    /**
     * Get the Files.
     *
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }
}
