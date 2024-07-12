<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            @if (session()->has('message'))
                <div class="flex items-center p-2 mb-2 text-md text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-3 w-1/6">
                        Category
                    </th>
                    <th scope="col" class="px-2 py-3 w-1/6">
                        Item
                    </th>
                    <th scope="col" class="px-2 py-3 w-1/3">
                        Note
                    </th>
                    <th scope="col" class="px-2 py-3 w-1/6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($shoppingList as $item)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white truncate">
                            @if ($item->category)
                                {{ $item->category }}
                            @else
                                /
                            @endif
                        </th>
                        <td class="px-6 py-4 text-lg text-gray-900 whitespace-nowrap dark:text-white font-bold">
                            @if ($item->item)
                                {{ $item->item }}
                            @else
                                /
                            @endif
                        </td>
                        <td class="px-6 py-4 truncate">
                            @if ($item->note)
                                {{ $item->note }}
                            @else
                                /
                            @endif
                        </td>
                        <td class="pl-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <button class="font-medium text-green-600 dark:text-green-500 hover:underline pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                            <button wire:click='deleteItem({{ $item }})' class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                @empty
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            /
                        </th>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                            /
                        </td>
                        <td class="px-6 py-4">
                            /
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            /
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>




</div>
