<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\ShoppingList;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class ShoppingListForm extends Form
{
    #[Validate('required')]
    public string $name = '';

    public string $category = '';

    public ?int $userId = null;

    public function save(): void
    {
        $this->userId = Auth::user()->id;
        ShoppingList::create($this->all());
        $this->reset('name', 'category');
    }

}
