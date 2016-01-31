<?php

/*
 * This file is part of the Laravel Quotes package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unicodeveloper\Quotes;

use Illuminate\Support\ServiceProvider;
use Unicodeveloper\Quotes\Commands\Djkhaled;

class QuotesServiceProvider extends ServiceProvider {

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
      $this->app->bind('laravel-quotes', function() {

          return new Quotes;

      });
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
      return ['laravel-quotes'];
    }
}