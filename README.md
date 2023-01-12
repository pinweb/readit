# TJAD Reader Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pinweb/readit.svg?style=flat-square)](https://packagist.org/packages/pinweb/readit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/pinweb/readit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/pinweb/readit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/pinweb/readit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/pinweb/readit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pinweb/readit.svg?style=flat-square)](https://packagist.org/packages/pinweb/readit)

This is a Laravel Package for TJAD Reader v2.0

## Installation

You can install the package via composer:

```bash
composer require pinweb/readit
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="readit-config"
```

This is the contents of the published config file:

```php
return [
    'reader' => env('READER_URL', 'http://read.dev.pinweb.io'),

    'cors'   => env('CORS_URL', ''),

    'key'    => env('READER_KEY', '')
];
```

## Usage

```php
$url = Readit::create('http://www.example.com/test.pdf');
```

or

```php
$url = readit('http://www.example.com/test.pdf');
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
