<?php

namespace InvadersXX\FilamentJetstreamProfile\Livewire;

use Laravel\Jetstream\Http\Livewire\TwoFactorAuthenticationForm as BaseTwoFactorAuthenticationForm;

class TwoFactorAuthenticationForm extends BaseTwoFactorAuthenticationForm
{
    public function render()
    {
        return view('filament-jetstream-profile::profile.two-factor-authentication-form');
    }
}
