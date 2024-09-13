# Laravel-terms (WIP ⚠️)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/phikhi/laravel-terms.svg?style=flat-square)](https://packagist.org/packages/phikhi/laravel-terms)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/phikhi/laravel-terms/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/phikhi/laravel-terms/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/phikhi/laravel-terms/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/phikhi/laravel-terms/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/phikhi/laravel-terms.svg?style=flat-square)](https://packagist.org/packages/phikhi/laravel-terms)

Add legal pages management and acceptation to your Laravel app.

## Compatibility

> Made for any app that uses:
> - Laravel v10.x, v11.x
> - PHP 8.2+
>
> This package supports Breeze and Jetstream apps with any frontend option:
> - Blade
> - Livewire
> - Inertia (React/Vue)

## Todolist

- [ ] Create a middleware for the terms acceptation
- [ ] Create test suite
- [ ] Create the install command
- [ ] Create the publishable config file
- [ ] Create the models:
    - [ ] Term
    - [ ] TermUser
    - [ ] TermUserAcceptation
- [ ] Create the publishable migrations:
    - [ ] terms table
    - [ ] term_user table
    - [ ] term_user_acceptations table
- [ ] Create the publishable factories:
    - [ ] TermFactory
    - [ ] TermUserFactory
    - [ ] TermUserAcceptationFactory
- [ ] Create the publishable seeders:
    - [ ] TermsSeeder
    - [ ] TermUserSeeder
    - [ ] TermUserAcceptationSeeder
- [ ] Create the publishable views:
    - [ ] Blade components
    - [ ] Livewire components
    - [ ] Inertia components:
        - [ ] ReactJS components
        - [ ] VueJS components

## Installation

First, install the package via composer:

```bash
composer require phikhi/laravel-terms
```

Then, run the install command:

```bash
php artisan terms:install
```

Finally, run the migrations:

```bash
php artisan migrate
```

### Optional steps

Publish the migrations with:

```bash
php artisan vendor:publish --tag="laravel-terms-migrations"
```

Publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-terms-config"
```

Publish the views using

```bash
php artisan vendor:publish --tag="laravel-terms-views"
```

## Usage

```php
$terms = new Phikhi\Terms();
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

- [Philippe Khill](https://github.com/phikhi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
