<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingList;
use Livewire\Attributes\Validate;

class CreateShoppingList extends Component
{
    #[Validate('required')]
    public string $name = '';

    public string $category = '';

    public bool $success = false;

    public function render()
    {
        return view('livewire.create-shopping-list');
    }

    public function save(): void
    {
        $this->validate();

        ShoppingList::create([
            'name' => $this->name,
            'category' => $this->category
        ]);

        $this->success = true;

        $this->reset('name');
    }
}
