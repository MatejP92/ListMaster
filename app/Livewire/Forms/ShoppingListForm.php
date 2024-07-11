<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\ShoppingList;
use Livewire\Attributes\Validate;

class ShoppingListForm extends Form
{
    #[Validate('required')]
    public string $name = '';

    public string $category = '';

    public function save(): void
    {
        ShoppingList::create($this->all());
        $this->reset('name', 'category');
    }

}
