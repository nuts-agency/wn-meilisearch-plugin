<?php namespace Nuts\Meilisearch\Facades;

use Illuminate\Support\Facades\Facade;
use Meilisearch\Client as Meilisearch;

class MeilisearchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
      return Meilisearch::class;
    }
}
