# Laravel Extended Config

[![tests](https://github.com/microweber-packages/laravel-config-extended/workflows/tests/badge.svg)](https://github.com/microweber-packages/laravel-config-extended/actions?query=workflow:"tests")
[![Latest Version on Packagist](https://img.shields.io/packagist/v/microweber-packages/laravel-config-extended.svg?style=flat-square)](https://packagist.org/packages/microweber-packages/laravel-config-extended)

Config class to use in Microweber CMS for Laravel. It allows saving of the config file.

## Installation

Use composer to install the package:

```bash
composer require microweber-packages/laravel-config-extended
```

## Usage

The Laravel Extended Config package extends Laravel's default configuration system by adding a save method. This allows
you to persistently save configuration changes. Here's a basic example:

```php
use Illuminate\Support\Facades\Config;

// Set a value
Config::set('app.name', 'New App Name');

// Save the changes
Config::save(['app']);

```

In this example, the app.name configuration value is changed and then saved. The save method takes an array of
configuration files to save. In this case, it saves the app configuration file.

## Testing

Run the tests with:

```bash
composer test
```