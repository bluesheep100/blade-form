# A group of easy-to-use Blade components for making forms with less code by adhering to conventions.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bluesheep100/blade-form.svg?style=flat-square)](https://packagist.org/packages/bluesheep100/blade-form)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bluesheep100/blade-form/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bluesheep100/blade-form/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bluesheep100/blade-form/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bluesheep100/blade-form/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bluesheep100/blade-form.svg?style=flat-square)](https://packagist.org/packages/bluesheep100/blade-form)

## Installation

You can install the package via composer:

```bash
composer require bluesheep100/blade-form
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="blade-form-config"
```

Additionally, you can publish the views using

```bash
php artisan vendor:publish --tag="blade-form-views"
```

## Usage

```php
$bladeForm = new Bluesheep\BladeForm();
echo $bladeForm->echoPhrase('Hello, Bluesheep!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anders Aagaard Schütt](https://github.com/bluesheep100)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
