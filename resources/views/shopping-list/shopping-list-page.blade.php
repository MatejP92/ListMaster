<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Shopping List') }}
        </h2>
    </x-slot>

    @auth
        <div class="py-12">
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
                                <button class="inline-block p-4 border-b-2 rounded-t-lg"
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
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg"
                                        id="profile-styled-tab"
                                        data-tabs-target="#styled-profile"
                                        type="button"
                                        role="tab"
                                        aria-controls="profile"
                                        aria-selected="false">
                                    Profile
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="dashboard-styled-tab"
                                        data-tabs-target="#styled-dashboard"
                                        type="button"
                                        role="tab"
                                        aria-controls="dashboard"
                                        aria-selected="false">
                                    Dashboard
                                </button>
                            </li>
{{-- Adds a "+" button to add tab --}}
{{--                            <li class="me-2" role="presentation">--}}
{{--                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"--}}
{{--                                        id="dashboard-styled-tab"--}}
{{--                                        data-tabs-target="#styled-dashboard"--}}
{{--                                        type="button"--}}
{{--                                        role="tab"--}}
{{--                                        aria-controls="dashboard"--}}
{{--                                        aria-selected="false">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div id="default-styled-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
                     id="styled-home"
                     role="tabpanel"
                     aria-labelledby="home-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        <strong class="font-medium text-gray-800 dark:text-white">Home tab</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.
                    </p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
                     id="styled-profile"
                     role="tabpanel"
                     aria-labelledby="profile-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
                     id="styled-dashboard"
                     role="tabpanel"
                     aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>

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
