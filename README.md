# Make simple backend forms with ease!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bluesheep100/blade-form.svg?style=flat-square)](https://packagist.org/packages/bluesheep100/blade-form)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bluesheep100/blade-form/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bluesheep100/blade-form/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bluesheep100/blade-form.svg?style=flat-square)](https://packagist.org/packages/bluesheep100/blade-form)

## Installation

You can install the package via composer:

```bash
composer require bluesheep100/blade-form
```

## Usage

All the components included in this package can be accessed via. the `x-bluesheep::` vendor prefix:
```html
<x-bluesheep::input/>
```

If you want to customize the components, you can publish them to your own project:
```shell
php artisan vendor:publish --tag="blade-form-components"
```
This also publishes the backend class files to your `app/View/Components` directory.

They can then be referenced like any other Blade component, without the vendor prefix:
```html
<x-input/>
```

## Configuration

You can publish the configuration file to your project's `/config` directory:
```
php artisan vendor:publish --tag="blade-form-config"
```

### Options

| Option                | Default         | Description                                                                                                     |
|-----------------------|-----------------|-----------------------------------------------------------------------------------------------------------------|
| `autoload_components` | Default:`true`  | Auto-registers components with Laravel. `false` registers manually without vendor prefix. (can cause conflicts) |


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Anders Aagaard Schütt](https://github.com/bluesheep100)

## License

The MIT License (MIT). Please see the [License File](LICENSE.md) for more information.
