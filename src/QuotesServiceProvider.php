<?php

namespace Unicodeveloper\Quotes;

use Illuminate\Support\ServiceProvider;

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