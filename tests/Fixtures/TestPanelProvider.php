<?php

namespace JeffersonGoncalves\Filament\QuebecVendors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\QuebecVendors\QuebecVendorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                QuebecVendorsPlugin::make(),
            ]);
    }
}
