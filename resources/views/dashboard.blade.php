<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" data-theme="fantasy">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="p-6 mt-6 bg-blue-100 shadow-md sm:rounded-lg flex justify-center">
                <button class="btn btn-secondary waves-effect waves-light btn-lg bg-gradient btn-label">Test Button</button>
            </div>
        </div>
    </div>
</x-app-layout>
