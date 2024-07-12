<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\ShoppingList;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class ShoppingListForm extends Form
{
    #[Validate('required')]
    public string $item = '';
    public string $category = '';

    public function save(): void
    {
        // Create a new shopping list entry with the current user's ID
        ShoppingList::create([
            'item' => $this->item,
            'category' => $this->category,
            'user_id' => Auth::id(),
        ]);

        // Reset the form fields
        $this->reset('name', 'category');
    }
}
