<x-filament::card :header="__('Profile Information')">

    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        {{ __('Update your account\'s profile information and email address.') }}
    </p>
    <x-filament::form wire:submit.prevent="updateProfileInformation">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            "/>

                <x-filament-jetstream-profile::label for="photo" value="{{ __('Photo') }}"/>

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                         class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-filament-jetstream-profile::secondary-button class="mt-2 mr-2" type="button"
                                                                x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                    </x-filament::button>

                    @if ($this->user->profile_photo_path)
                        <x-filament::button type="button" color="danger" class="mt-2" wire:click="deleteProfilePhoto">
                            {{ __('Remove Photo') }}
                        </x-filament::button>
                    @endif

                    <x-filament-jetstream-profile::input-error for="photo" class="mt-2"/>
            </div>
    @endif

    <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-filament-jetstream-profile::label for="name" value="{{ __('Name') }}"/>
            <x-filament-jetstream-profile::input id="name" type="text" class="mt-1 block w-full"
                                                 wire:model.defer="state.name"
                                                 autocomplete="name"/>
            <x-filament-jetstream-profile::input-error for="name" class="mt-2"/>
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-filament-jetstream-profile::label for="email" value="{{ __('Email') }}"/>
            <x-filament-jetstream-profile::input id="email" type="email" class="mt-1 block w-full"
                                                 wire:model.defer="state.email"/>
            <x-filament-jetstream-profile::input-error for="email" class="mt-2"/>
        </div>

        <x-filament-jetstream-profile::action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-filament-jetstream-profile::action-message>

        <x-filament::button type="submit" wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-filament::button>
    </x-filament::form>
</x-filament::card>
