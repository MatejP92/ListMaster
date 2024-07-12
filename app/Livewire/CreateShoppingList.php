<?php

namespace App\Livewire;

use session;
use Livewire\Component;
use App\Livewire\Forms\ShoppingListForm;

class CreateShoppingList extends Component
{
    public ShoppingListForm $form;

    public bool $success = false;

    public function render()
    {
        return view('livewire.create-shopping-list');
    }

    public function save()
    {
        $this->validate();

        $this->form->save();

        $this->success = true;

        return $this->redirect('/shopping-list');
    }
}
