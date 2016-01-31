# laravel-quotes

[![Latest Stable Version](https://poser.pugx.org/unicodeveloper/laravel-quotes/v/stable.svg)](https://packagist.org/packages/unicodeveloper/laravel-quotes)
[![License](https://poser.pugx.org/unicodeveloper/laravel-quotes/license.svg)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/unicodeveloper/laravel-quotes.svg)](https://travis-ci.org/unicodeveloper/laravel-quotes)
[![Quality Score](https://img.shields.io/scrutinizer/g/unicodeveloper/laravel-quotes.svg?style=flat-square)](https://scrutinizer-ci.com/g/unicodeveloper/laravel-quotes)
[![Total Downloads](https://img.shields.io/packagist/dt/unicodeveloper/laravel-quotesc.svg?style=flat-square)](https://packagist.org/packages/unicodeveloper/laravel-quotes)

> A Laravel 5 Package for providing all kinds of quotes, from PROGRAMMING to DESIGN to DJKHALED Quotes

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of Laravel Quotes, simply add the following line to the require block of your `composer.json` file.

```
"unicodeveloper/laravel-quotes": "1.0.*"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once Laravel Quotes is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Unicodeveloper\Quotes\QuotesServiceProvider::class`

Also, register the Facade like so:

```php
'aliases' => [
    ...
    'Quotes' => Unicodeveloper\Quotes\Facades\QuotesFacade::class,
    ...
]
```

Register the Artisan commands by adding this to the `$commands` array in `Kernel.php`

```php
    **
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \Unicodeveloper\Quotes\Commands\Design::class,
        \Unicodeveloper\Quotes\Commands\Djkhaled::class,
        \Unicodeveloper\Quotes\Commands\Programming::class,
    ];
```

## Configuration

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Unicodeveloper\Quotes\QuotesServiceProvider"
```

## Usage

Get to Use Facades like so:
```php

/**
 * Gets a key to success from DjKhaled
 * @returns a string
 */
Quotes::djkhaled()->anotherOne();

/**
 * Gets all the Keys To Success #BlessUp
 * @returns an array
 */
Quotes::djkhaled()->all()

**
 * Gets a programming quote
 * @returns a string
 */
Quotes::programming()->random();

/**
 * Gets all programming quotes
 * @returns an array
 */
Quotes::programming()->all();

**
 * Gets a design quote
 * @returns a string
 */
Quotes::design()->random();

/**
 * Gets all design quotes
 * @returns an array
 */
Quotes::design()->all();
```

Get to use Artisan Commands like so:

```bash
php artisan djkhaled:inspire
```

```bash
php artisan design:inspire
```

```bash
php artisan programming:inspire
```

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

You can greatly contribute by adding more quotes to `Quotes/programming.php` and `Quotes/design.php`. The format are in the files.

Also, add more `DJ KHALED` Keys to success that I have omitted/left-out. #BlessUp

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
