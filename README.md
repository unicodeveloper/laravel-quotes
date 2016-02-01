# laravel-quotes

![laravel-quotes](https://cloud.githubusercontent.com/assets/2946769/12701609/637a89c6-c80e-11e5-9b57-f764b1742155.png)
[![Latest Stable Version](https://poser.pugx.org/unicodeveloper/laravel-quotes/v/stable.svg)](https://packagist.org/packages/unicodeveloper/laravel-quotes)
![](https://img.shields.io/badge/unicodeveloper-approved-brightgreen.svg)
[![License](https://poser.pugx.org/unicodeveloper/laravel-quotes/license.svg)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/unicodeveloper/laravel-quotes.svg)](https://travis-ci.org/unicodeveloper/laravel-quotes)
[![Coverage Status](https://coveralls.io/repos/unicodeveloper/laravel-quotes/badge.svg?branch=master&service=github)](https://coveralls.io/github/unicodeveloper/laravel-quotes)
[![Quality Score](https://img.shields.io/scrutinizer/g/unicodeveloper/laravel-quotes.svg?style=flat-square)](https://scrutinizer-ci.com/g/unicodeveloper/laravel-quotes)
[![Total Downloads](https://img.shields.io/packagist/dt/unicodeveloper/laravel-quotes.svg?style=flat-square)](https://packagist.org/packages/unicodeveloper/laravel-quotes)

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
    'Quotes' => Unicodeveloper\Quotes\Facades\Quotes::class,
    ...
]
```

Register the Artisan commands by adding this to the `$commands` array in `App/Console/Kernel.php`

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
![djkhaled:inspire](https://cloud.githubusercontent.com/assets/2946769/12701591/e83bf97a-c80d-11e5-8d6a-06e8ec35875d.png)

```bash
php artisan design:inspire
```
![design:inspire](https://cloud.githubusercontent.com/assets/2946769/12701590/d7813a5a-c80d-11e5-84d4-d7ab90d07371.png)

```bash
php artisan programming:inspire
```
![programming:inspire](https://cloud.githubusercontent.com/assets/2946769/12701589/c52f03c8-c80d-11e5-91b8-23c33c9d4bb6.png)

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

You can greatly contribute by adding more quotes to `Quotes/programming.php` and `Quotes/design.php`. The format are in the files.

Also, add more `DJ KHALED` Keys to success that I have omitted or left-out. #BlessUp

###### Remember: Major :key: To Success is to Contribute to Open Source

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/unicodeveloper)!

Thanks!
Prosper Otemuyiwa.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
