<div>
    <form method="post" wire:submit.prevent="save" class="space-y-4">
        @csrf
        <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
            <div class="flex-1">
                <x-text-input id="item" placeholder="Item" class="w-full ml-2" wire:model="form.item" />
                @error('form.item')
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-1">
                <x-text-input id="note" placeholder="Note" class="w-full ml-2" wire:model="form.note" />
            </div>
            <div>
                <x-primary-button class="ml-2 md:mx-10 w-full md:w-auto">Add</x-primary-button>
            </div>
        </div>
    </form>

    @if($success)
        <span class="block mt-4 text-green-500">Item added successfully.</span>
    @endif
</div>
