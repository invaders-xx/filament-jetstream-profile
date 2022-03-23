<?php

namespace InvadersXX\FilamentJetstreamProfile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \InvadersXX\FilamentJetstreamProfile\FilamentJetstreamProfile
 */
class FilamentJetstreamProfile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-jetstream-profile';
    }
}
