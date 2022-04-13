<x-filament::card :header="__('Two Factor Authentication')">

    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        {{ __('Add additional security to your account using two factor authentication.') }}
    </p>
    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        @if ($this->enabled)
            {{ __('You have enabled two factor authentication.') }}
        @else
            {{ __('You have not enabled two factor authentication.') }}
        @endif
    </h3>

    <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-200">
        <p>
            {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
        </p>
    </div>

    @if ($this->enabled)
        @if ($showingQrCode)
            <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-100">
                <p class="font-semibold">
                    {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                </p>
            </div>

            <div class="mt-4">
                {!! $this->user->twoFactorQrCodeSvg() !!}
            </div>
        @endif

        @if ($showingRecoveryCodes)
            <div class="mt-4 max-w-xl text-sm text-gray-600 dark:text-gray-100">
                <p class="font-semibold">
                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                </p>
            </div>

            <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 dark:bg-gray-800 rounded-lg">
                @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                    <div>{{ $code }}</div>
                @endforeach
            </div>
        @endif
    @endif

    <div class="mt-5">
        @if (! $this->enabled)
            <x-filament-jetstream-profile::confirms-password wire:then="enableTwoFactorAuthentication">
                <x-filament::button type="button" wire:loading.attr="disabled">
                    {{ __('Enable') }}
                </x-filament::button>
            </x-filament-jetstream-profile::confirms-password>
        @else
            @if ($showingRecoveryCodes)
                <x-filament-jetstream-profile::confirms-password wire:then="regenerateRecoveryCodes">
                    <x-filament-jetstream-profile::secondary-button class="mr-3">
                        {{ __('Regenerate Recovery Codes') }}
                    </x-filament-jetstream-profile::secondary-button>
                </x-filament-jetstream-profile::confirms-password>
            @else
                <x-filament-jetstream-profile::confirms-password wire:then="showRecoveryCodes">
                    <x-filament::button class="mr-3">
                        {{ __('Show Recovery Codes') }}
                    </x-filament::button>
                </x-filament-jetstream-profile::confirms-password>
            @endif

            <x-filament-jetstream-profile::confirms-password wire:then="disableTwoFactorAuthentication">
                <x-filament-jetstream-profile::secondary-button wire:loading.attr="disabled">
                    {{ __('Disable') }}
                </x-filament-jetstream-profile::secondary-button>
            </x-filament-jetstream-profile::confirms-password>
        @endif
    </div>
</x-filament::card>

