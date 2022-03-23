<div
    class="p-4 max-w-full bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6" wire:submit.prevent="save">
        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('Profile Information') }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ __('Update your account\'s profile information and email address.') }}</p>
        {{ $this->form }}
        <div class="flex flex-wrap items-center gap-4 justify-start">
            <x-jet-action-message class="mr-3 text-success-700" on="saved">
                {{ __('Saved') }}
            </x-jet-action-message>
            <x-filament::button type="submit">
                {{ __('Save') }}
            </x-filament::button>

        </div>
    </form>
</div>
