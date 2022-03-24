<?php

namespace InvadersXX\FilamentJetstreamProfile\Livewire;

use Laravel\Jetstream\Http\Livewire\DeleteUserForm as BaseDeleteUserForm;

class DeleteUserForm extends BaseDeleteUserForm
{
    public function render()
    {
        return view('filament-jetstream-profile::profile.delete-user-form');
    }
}
