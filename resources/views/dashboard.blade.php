<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold fs-4 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4 py-lg-12">
        <div class="container-lg mx-auto px-4 sm:px-6 lg:px-8">
                @livewire('currencyexchange-converter')
                @livewire('currencyexchange-table')
        </div>
    </div>
</x-app-layout>
