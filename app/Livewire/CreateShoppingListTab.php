<?php

namespace App\Livewire;

use App\Models\ShoppingListTab;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateShoppingListTab extends Component
{
    public string $name = '';

    public Collection $shoppingListTab;

    public function render()
    {
        return view('livewire.create-shopping-list-tab', [
            'shoppingListTabs' => $this->shoppingListTab
        ]);
    }


    public function mount(): void
    {
        $userId = Auth::id();
        $this->shoppingListTab = ShoppingListTab::where('user_id', $userId)->get();
    }

    public function saveTab()
    {
        $this->validate([
            'name' => ['required', 'string'],
        ]);

        ShoppingListTab::create([
            'user_id' => auth()->id(),
            'name' => $this->name,
        ]);

        $this->redirect(route('shopping-list'));
//        dd($this->name);
    }
}
