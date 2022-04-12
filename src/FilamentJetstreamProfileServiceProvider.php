<?php

namespace InvadersXX\FilamentJetstreamProfile;

use Filament\PluginServiceProvider;
use InvadersXX\FilamentJetstreamProfile\Livewire\DeleteUserForm;
use InvadersXX\FilamentJetstreamProfile\Livewire\LogoutOtherBrowserSessionsForm;
use InvadersXX\FilamentJetstreamProfile\Livewire\TwoFactorAuthenticationForm;
use InvadersXX\FilamentJetstreamProfile\Livewire\UpdatePasswordForm;
use InvadersXX\FilamentJetstreamProfile\Livewire\UpdateProfileInformationForm;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class FilamentJetstreamProfileServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-jetstream-profile';

    public function packageBooted(): void
    {
        parent::packageBooted();
        Livewire::component(UpdateProfileInformationForm::getName(), UpdateProfileInformationForm::class);
        Livewire::component(LogoutOtherBrowserSessionsForm::getName(), LogoutOtherBrowserSessionsForm::class);
        Livewire::component(TwoFactorAuthenticationForm::getName(), TwoFactorAuthenticationForm::class);
        Livewire::component(UpdatePasswordForm::getName(), UpdatePasswordForm::class);
        Livewire::component(DeleteUserForm::getName(), DeleteUserForm::class);
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::$name)
            ->hasConfigFile()
            ->hasViews();
    }

    protected function getPages(): array
    {
        return config("filament-jetstream-profile.enable_profile_page")
            ? [Pages\JetstreamProfile::class]
            : [];
    }
}
