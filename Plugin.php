<?php namespace Nuts\Meilisearch;

use Config;
use Meilisearch\Client as Meilisearch;
use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;
use Nuts\Meilisearch\Facades\MeilisearchFacade;

class Plugin extends PluginBase
{
    public function register()
    {
        $this->app->singleton(Meilisearch::class, function($app) {
            return new Meilisearch(
                Config::get('nuts.meilisearch::meilisearch.url'),
                Config::get('nuts.meilisearch::meilisearch.token')
            );
        });
    }

    public function boot()
    {
        $facade = AliasLoader::getInstance();
        $facade->alias('Meilisearch', MeilisearchFacade::class);
    }
}
