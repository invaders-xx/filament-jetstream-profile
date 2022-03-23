
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Add jetstream-profile to filament admin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/invaders-xx/filament-jetstream-profile.svg?style=flat-square)](https://packagist.org/packages/invaders-xx/filament-jetstream-profile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/invaders-xx/filament-jetstream-profile/run-tests?label=tests)](https://github.com/invaders-xx/filament-jetstream-profile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/invaders-xx/filament-jetstream-profile/Check%20&%20fix%20styling?label=code%20style)](https://github.com/invaders-xx/filament-jetstream-profile/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/invaders-xx/filament-jetstream-profile.svg?style=flat-square)](https://packagist.org/packages/invaders-xx/filament-jetstream-profile)

Retrieve the standard Jetstream profile view in Filament

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/filament-jetstream-profile.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/filament-jetstream-profile)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

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
];
```


## Usage
Add 
```php
\InvadersXX\FilamentJetstreamProfile\Pages\Profile::class,
```
to filament config file in 'pages' register section.

or 
```bash
php artisan filament:page Profile
```
This will create a new App\Filament\Pages\Profile class in your project.

You can then update this class to extend the InvadersXX\FilamentJetstreamProfile\Pages\Profile class.
```php
namespace App\Filament\Pages;

use InvadersXX\FilamentJetstreamProfile\Pages\Profile as BaseProfile;

class Profile extends BaseProfile
{
// ...
}
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
