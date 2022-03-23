<?php

namespace InvadersXX\FilamentJetstreamProfile\Forms;

use App\Rules\MatchOldPassword;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Laravel\Fortify\Rules\Password;
use Livewire\Component;

class UpdatePassword extends Component implements HasForms
{
    use InteractsWithForms;

    public $current_password;
    public $password;
    public $password_confirmation;

    public function mount(): void
    {
        $this->form->fill([
            'current_password' => null,
            'password' => null,
            'password_confirmation' => null,
        ]);
    }

    public function save()
    {
        $input = $this->form->getState();
        auth()->user()->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
        $this->emit('saved');
    }

    public function render(): View
    {
        return view('filament-jetstream-profile::livewire.update-password');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('current_password')
                ->label(__('Current Password'))
                ->placeholder(__('Current Password'))
                ->type('password')
                ->rules(['required', new MatchOldPassword()])
                ->required(),
            TextInput::make('password')
                ->label(__('New Password'))
                ->type('password')
                ->placeholder(__('New Password'))
                ->rules(['required', 'string', new Password, 'confirmed'])
                ->required(),
            TextInput::make('password_confirmation')
                ->label(__('Confirm Password'))
                ->type('password')
                ->rules(['required', 'same:password'])
                ->placeholder(__('Confirm Password'))
                ->required(),
        ];
    }
}
