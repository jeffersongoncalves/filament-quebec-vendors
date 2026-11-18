<div class="filament-hidden">

![Filament Quebec Vendors](https://raw.githubusercontent.com/jeffersongoncalves/filament-quebec-vendors/3.x/art/jeffersongoncalves-filament-quebec-vendors.png)

</div>

# Filament Quebec Vendors

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-quebec-vendors.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-quebec-vendors)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-quebec-vendors/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-quebec-vendors/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-quebec-vendors/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-quebec-vendors/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-quebec-vendors.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-quebec-vendors)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-quebec-vendors.svg?style=flat-square)](LICENSE.md)

Keep the register of vendors you communicate personal information to, from [laravel-quebec-vendors](https://github.com/jeffersongoncalves/laravel-quebec-vendors), in your Filament panel. Each vendor shows what it still owes under Quebec's private sector privacy act (Law 25).

## Features

- Vendors with role (service provider or third party), risk tier, services and information communicated.
- Mandate or service contract: signed and expiry dates, plus a checklist of what s. 18.3 says it must cover. The items come from the `quebec-vendors.dpa_checklist` config.
- Location (Quebec, another province or a country) and, outside Quebec, the privacy impact assessment date and reference (s. 17).
- An **Issues** column: missing, expired or incomplete contract, no assessment, review due, destruction or return pending.
- Actions: **Mark as reviewed**, **End relationship** and **Information destroyed or returned**.
- 19 languages.

## Compatibility

| Plugin Version                                                              | Filament |
|-----------------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-quebec-vendors/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-quebec-vendors/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-quebec-vendors/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-quebec-vendors:"^3.0"
php artisan vendor:publish --tag="quebec-vendors-migrations"
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\QuebecVendors\QuebecVendorsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            QuebecVendorsPlugin::make()
                ->navigationGroup('Quebec')             // default: no group
                ->navigationSort(6)
                ->navigationIcon('heroicon-o-building-office-2')
                ->slug('vendors'),
        ]);
}
```

All fluent methods are optional.

> The resource has no authorization of its own: register it only on panels whose users maintain the register, or add a policy for `JeffersonGoncalves\QuebecVendors\Models\Vendor`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
