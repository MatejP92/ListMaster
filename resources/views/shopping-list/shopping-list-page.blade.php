<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Shopping List') }}
        </h2>
    </x-slot>

    @auth
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    {{-- FORM --}}
                    <div class="py-6">
                        <livewire:create-shopping-list />
                    </div>

                    {{-- TABLE --}}
                    <div>
                        <livewire:show-shopping-list />
                    </div>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Please login") }}
                    </div>
                </div>
            </div>
        </div>
    @endguest

</x-app-layout>
