<?php

namespace InvadersXX\FilamentJetstreamProfile\Livewire;

use Laravel\Jetstream\Http\Livewire\UpdatePasswordForm as BaseUpdatePasswordForm;

class UpdatePasswordForm extends BaseUpdatePasswordForm
{
    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('filament-jetstream-profile::profile.update-password-form');
    }
}
