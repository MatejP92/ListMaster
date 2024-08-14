{{-- TABS --}}
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div>
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center"
                id="default-styled-tab"
                data-tabs-toggle="#default-styled-tab-content"
                data-tabs-active-classes="text-sky-600 hover:text-sky-600 dark:text-sky-500 dark:hover:text-sky-500 border-sky-800 dark:border-sky-700"
                data-tabs-inactive-classes="dark:border-transparent text-gray-800 hover:text-gray-600 dark:text-gray-400 border-gray-200 hover:border-gray-300 dark:border-gray-700 dark:hover:border-gray-700 dark:hover:text-gray-200"
                role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg transition-all"
                            id="home-styled-tab"
                            data-tabs-target="#styled-home"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </button>
                </li>

                @foreach($shoppingListTabs as $tab)
{{--                    @dd($tab->name)--}}
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg transition-all"
                                id="{{ $tab->name }}-styled-tab"
                                data-tabs-target="#styled-{{ $tab->name }}"
                                type="button"
                                role="tab"
                                aria-controls="{{ $tab->name }}"
                                aria-selected="false">
                            {{ $tab->name }}
                        </button>
                    </li>
                @endforeach

{{-- Adds a "+" button to add a tab --}}
                <li class="me-2" role="presentation">
                    <button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'add-custom-tab')"
                        class="inline-block p-4 rounded-t-lg text-green-500 dark:text-green-700 hover:text-green-700 dark:hover:text-green-500 transition-all"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </li>
            </ul>

            <x-modal name="add-custom-tab" :show="$errors->isNotEmpty()" focusable>
                <form wire:submit="saveTab" class="p-6">
                    @csrf
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-gray-100">
                        <x-input-label>Create a Custom Tab</x-input-label>
                    </h1>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <x-text-input
                            wire:model="name"
                            id="name"
                            name="name"
                            type="text"
                            class="mt-1 block w-3/4"
                            placeholder="{{ __('Tab Name') }}"
                        />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-start">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        <x-primary-button class="ms-3">
                            {{ __('Add Tab') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-modal>
        </div>
    </div>
</div>
