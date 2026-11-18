<?php

use JeffersonGoncalves\Filament\QuebecVendors\QuebecVendorsPlugin;
use JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\Pages\CreateVendor;
use JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\Pages\EditVendor;
use JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\Pages\ListVendors;
use JeffersonGoncalves\Filament\QuebecVendors\Resources\Vendors\VendorResource;
use JeffersonGoncalves\Filament\QuebecVendors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\QuebecVendors\Enums\VendorRole;
use JeffersonGoncalves\QuebecVendors\Models\Vendor;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Person in charge', 'email' => 'privacy@example.com']));
});

it('creates a service provider outside Quebec with its contract checklist', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm([
            'name' => 'Stripe',
            'role' => 'service_provider',
            'risk' => 'high',
            'location' => 'US',
            'pia_completed_at' => '2026-01-05',
            'pia_reference' => 'PIA-3',
            'dpa_signed_at' => '2026-01-10',
            'dpa_checklist' => ['mandate_only', 'verification'],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Vendor::sole())
        ->role->toBe(VendorRole::ServiceProvider)
        ->pia_reference->toBe('PIA-3')
        ->pia_completed_at->toDateString()->toBe('2026-01-05')
        ->dpa_checklist->toBe(['mandate_only' => true, 'verification' => true]);
});

it('requires a name and a role', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm(['name' => '', 'role' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'role' => 'required']);
});

it('lists vendors with their issues', function () {
    $vendor = Vendor::create(['name' => 'Mailer', 'role' => VendorRole::ServiceProvider]);

    Livewire::test(ListVendors::class)
        ->assertCanSeeTableRecords([$vendor])
        ->assertSee('No written contract');
});

it('edits the checklist, keeping the stored map', function () {
    $vendor = Vendor::create(['name' => 'Mailer', 'role' => VendorRole::ServiceProvider, 'dpa_signed_at' => now(), 'dpa_checklist' => ['mandate_only' => true]]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])
        ->assertFormSet(['dpa_checklist' => ['mandate_only']])
        ->fillForm(['dpa_checklist' => ['mandate_only', 'verification']])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($vendor->fresh()->dpa_checklist)->toBe(['mandate_only' => true, 'verification' => true]);
});

it('reviews, terminates and confirms the data return', function () {
    $vendor = Vendor::create(['name' => 'Old CRM', 'role' => VendorRole::ThirdParty]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('review');
    expect($vendor->fresh()->reviewed_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('terminate');
    expect($vendor->fresh()->terminated_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('dataReturned');
    expect($vendor->fresh()->issues())->toBe([]);
});

it('applies the fluent plugin options', function () {
    QuebecVendorsPlugin::get()->navigationGroup('Quebec')->slug('suppliers');

    expect(VendorResource::getNavigationGroup())->toBe('Quebec')
        ->and(VendorResource::getSlug())->toBe('suppliers');
});
