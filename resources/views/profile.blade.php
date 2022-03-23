<x-filament::page>
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        <livewire:invaders-x-x.filament-jetstream-profile.forms.update-profile-information/>
    @endif
    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <livewire:invaders-x-x.filament-jetstream-profile.forms.update-password/>
    @endif
    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
    @endif
    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
    @endif
</x-filament::page>
