<x-filament::page>
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        <livewire:invaders-x-x.filament-jetstream-profile.livewire.update-profile-information-form/>

        <x-jet-section-border />
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            <livewire:invaders-x-x.filament-jetstream-profile.livewire.update-password-form/>
        </div>

        <x-jet-section-border />
    @endif

    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div class="mt-10 sm:mt-0">
            <livewire:invaders-x-x.filament-jetstream-profile.livewire.two-factor-authentication-form/>
        </div>

        <x-jet-section-border />
    @endif

    <div class="mt-10 sm:mt-0">
        <livewire:invaders-x-x.filament-jetstream-profile.livewire.logout-other-browser-sessions-form/>
    </div>

    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <x-jet-section-border />

        <div class="mt-10 sm:mt-0">
            <livewire:invaders-x-x.filament-jetstream-profile.livewire.delete-user-form/>
        </div>
    @endif
</x-filament::page>
