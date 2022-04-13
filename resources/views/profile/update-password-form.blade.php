<x-filament::card :header="__('Update Password')">

    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>
    <x-filament::form wire:submit.prevent="updatePassword">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}"/>
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.current_password" autocomplete="current-password"/>
            <x-jet-input-error for="current_password" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}"/>
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password"
                         autocomplete="new-password"/>
            <x-jet-input-error for="password" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.password_confirmation" autocomplete="new-password"/>
            <x-jet-input-error for="password_confirmation" class="mt-2"/>
        </div>
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-filament::button type="submit">
            {{ __('Save') }}
        </x-filament::button>
    </x-filament::form>
</x-filament::card>
