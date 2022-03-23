<?php

namespace InvadersXX\FilamentJetstreamProfile\Forms;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Livewire\Component;

class UpdateProfileInformation extends Component implements HasForms
{
    use InteractsWithForms;

    public $first_name;
    public $last_name;
    public $email;

    public function mount(): void
    {
        $this->form->fill([
            'first_name' => auth()->user()->first_name,
            'last_name' => auth()->user()->last_name,
            'email' => auth()->user()->email,
        ]);
    }

    public function save()
    {
        $input = $this->form->getState();

        /*if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }*/

        if ($input['email'] !== auth()->user()->email &&
            auth()->user() instanceof MustVerifyEmail) {
            $this->updateVerifiedUser(auth()->user(), $input);
        } else {
            auth()->user()->forceFill([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
            ])->save();
        }
        $this->emit('saved');
    }

    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }

    public function render(): View
    {
        return view('filament-jetstream-profile::livewire.update-information');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('first_name')
                ->label(__('First Name'))
                ->placeholder(__('First Name'))
                ->rules(['required', 'string', 'max:255'])
                ->required(),
            TextInput::make('last_name')
                ->label(__('Last Name'))
                ->placeholder(__('Last Name'))
                ->rules(['required', 'string', 'max:255'])
                ->required(),
            TextInput::make('email')
                ->label(__('Email Address'))
                ->type('email')
                ->rules(['required', 'email', 'max:255', Rule::unique('users')->ignore(auth()->id())])
                ->required(),
        ];
    }
}
