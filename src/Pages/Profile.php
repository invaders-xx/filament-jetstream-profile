<?php

namespace InvadersXX\FilamentJetstreamProfile\Pages;

use Filament\Pages\Page;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static string $view = 'filament-jetstream-profile::profile';

    protected function getBreadcrumbs(): array
    {
        return [
            url()->current() => __('Profile'),
        ];
    }
}
