@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-sky-800 text-md font-medium leading-5 text-gray-950 dark:text-gray-100 focus:outline-none focus:border-sky-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-md font-medium leading-5 text-gray-700 dark:text-gray-300 hover:text-gray-700 hover:border-sky-700 dark:hover:border-sky-600 focus:outline-none focus:text-gray-700 focus:border-sky-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
