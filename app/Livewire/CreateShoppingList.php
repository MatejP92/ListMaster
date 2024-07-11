<?php

namespace App\Livewire;

use App\Livewire\Forms\ShoppingListForm;
use Livewire\Component;
use App\Models\ShoppingList;
use Livewire\Attributes\Validate;

class CreateShoppingList extends Component
{
    public ShoppingListForm $form;

    public bool $success = false;

    public function render()
    {
        return view('livewire.create-shopping-list');
    }

    public function save(): void
    {
        $this->validate();

        $this->form->save();

        $this->success = true;
    }
}
