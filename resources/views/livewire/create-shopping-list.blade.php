<div>
    <form method="post" wire:submit="save">
        @csrf
        <div>
            <x-input-label for="name">Name</x-input-label>
            <x-text-input id="name" placeholder='Name' class="w-1/3" wire:model='name' />
            <x-primary-button class="ml-2">Submit</x-primary-button>
        </div>
        @error('name')
            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
        @enderror
    </form>

    @if($success)
        <span class="block mb-4 text-green-500">Item added successfully.</span>
    @endif
</div>
