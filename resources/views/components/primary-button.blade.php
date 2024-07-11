<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-sky-800 border border-transparent rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest hover:bg-sky-600 focus:bg-sky-700 active:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-sky-700 focus:ring-offset-2 dark:focus:ring-offset-sky-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
