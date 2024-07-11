<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Shopping List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Here is your shopping list") }}
                </div>

                {{-- FORM --}}
                <div class="pb-6">
                    <form action="" method="post">
                        @csrf
                        <x-input-label>test</x-input-label>
                        <x-text-input placeholder='test' class="w-1/3"/>
                        <x-primary-button class="ml-2">Submit</x-primary-button>
                    </form>
                </div>

                {{-- TABLE --}}
                <div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
