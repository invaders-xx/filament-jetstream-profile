<?php

namespace InvadersXX\FilamentJetstreamProfile;

use Filament\PluginServiceProvider;
use InvadersXX\FilamentJetstreamProfile\Forms\UpdatePassword;
use InvadersXX\FilamentJetstreamProfile\Forms\UpdateProfileInformation;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class FilamentJetstreamProfileServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-jetstream-profile';

    public function packageBooted(): void
    {
        parent::packageBooted();
        Livewire::component(UpdatePassword::getName(), UpdatePassword::class);
        Livewire::component(UpdateProfileInformation::getName(), UpdateProfileInformation::class);
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::$name)
            ->hasConfigFile()
            ->hasViews();
    }
}
