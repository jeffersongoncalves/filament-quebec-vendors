<?php

namespace JeffersonGoncalves\Filament\QuebecVendors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class QuebecVendorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-quebec-vendors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
