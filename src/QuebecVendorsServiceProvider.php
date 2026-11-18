<?php

namespace JeffersonGoncalves\Filament\QuebecVendors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuebecVendorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-quebec-vendors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
