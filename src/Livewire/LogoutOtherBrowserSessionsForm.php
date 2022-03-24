<?php

namespace InvadersXX\FilamentJetstreamProfile\Livewire;

use Laravel\Jetstream\Http\Livewire\LogoutOtherBrowserSessionsForm as BaseLogoutOtherBrowserSessionsForm;

class LogoutOtherBrowserSessionsForm extends BaseLogoutOtherBrowserSessionsForm
{
    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('filament-jetstream-profile::profile.logout-other-browser-sessions-form');
    }
}
