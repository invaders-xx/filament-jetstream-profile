# Add jetstream-profile to filament admin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/invaders-xx/filament-jetstream-profile.svg?style=flat-square)](https://packagist.org/packages/invaders-xx/filament-jetstream-profile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/invaders-xx/filament-jetstream-profile/run-tests?label=tests)](https://github.com/invaders-xx/filament-jetstream-profile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/invaders-xx/filament-jetstream-profile/Check%20&%20fix%20styling?label=code%20style)](https://github.com/invaders-xx/filament-jetstream-profile/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/invaders-xx/filament-jetstream-profile.svg?style=flat-square)](https://packagist.org/packages/invaders-xx/filament-jetstream-profile)

Retrieve the standard Jetstream profile view in Filament

## Installation

You can install the package via composer:

```bash
composer require invaders-xx/filament-jetstream-profile
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-jetstream-profile-config"
```

This is the contents of the published config file:

```php
return [
    'enable_profile_page' => true,
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [David Vincent](https://github.com/invaders-xx)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
