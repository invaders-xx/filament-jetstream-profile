<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div
            class="px-4 py-5 sm:p-6 bg-white text-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100 shadow sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
