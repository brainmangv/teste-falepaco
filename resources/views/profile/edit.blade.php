<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold fs-4 text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-4 py-lg-12">
        <div class="container-lg mx-auto px-4 sm:px-6 lg:px-8">
            <div class="row g-4 g-lg-5">
                <div class="col-12 col-sm-6">
                    <div class="p-4 p-lg-8 bg-white shadow-sm rounded-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="p-4 p-lg-8 bg-white shadow-sm rounded-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="p-4 p-lg-8 bg-white shadow-sm rounded-3">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
