# Laravel-Modules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/apxiaoxv/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/apxiaoxv/laravel-modules)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/apxiaoxv/laravel-modules/master.svg?style=flat-square)](https://travis-ci.org/apxiaoxv/laravel-modules)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/apxiaoxv/laravel-modules.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/apxiaoxv/laravel-modules/?branch=master)
[![Quality Score](https://img.shields.io/scrutinizer/g/apxiaoxv/laravel-modules.svg?style=flat-square)](https://scrutinizer-ci.com/g/apxiaoxv/laravel-modules)
[![Total Downloads](https://img.shields.io/packagist/dt/apxiaoxv/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/apxiaoxv/laravel-modules)

| **Laravel**  |  **laravel-modules** |
|---|---|
| 6.0  | ^6.0  |

`apxiaoxv/laravel-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 8.

This package is a re-published, re-organised and maintained version of [pingpong/modules](https://github.com/pingpong-labs/modules), which isn't maintained anymore. This package is used in [AsgardCMS](https://asgardcms.com/).

With one big added bonus that the original package didn't have: **tests**.

Find out why you should use this package in the article: [Writing modular applications with laravel-modules](https://nicolaswidart.com/blog/writing-modular-applications-with-laravel-modules).

## Install

To install through Composer, by run the following command:

``` bash
composer require apxiaoxv/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Apxiaoxv\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default, the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

You'll find installation instructions and full documentation on [https://apxiaoxv.com/laravel-modules/](https://apxiaoxv.com/laravel-modules/).

## Credits

- [Nicolas Widart](https://github.com/apxiaoxv)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Nicolas Widart

Nicolas Widart is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://apxiaoxv.com/), or visit [my website](https://nicolaswidart.com).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
