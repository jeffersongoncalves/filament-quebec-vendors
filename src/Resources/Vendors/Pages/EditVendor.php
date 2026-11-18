<?php

namespace JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\VendorActions;
use JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\VendorResource;

class EditVendor extends EditRecord
{
    protected static string $resource = VendorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ...VendorActions::all(),
            DeleteAction::make(),
        ];
    }
}
