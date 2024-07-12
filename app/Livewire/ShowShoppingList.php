<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class ShowShoppingList extends Component
{
    public Collection $shoppingList;

    protected $listeners =['refreshTable' => '$refresh'];

    public function render()
    {
        return view('livewire.show-shopping-list', [
            'shoppingLists' => $this->shoppingList
        ]);
    }

    public function mount(): void
    {
        $userId = Auth::id();
        $this->shoppingList = ShoppingList::where('user_id', $userId)->get();
    }

    public function deleteItem($item): void
    {
        $itemName = $item['item'];
        ShoppingList::findOrFail($item['id'])->delete();

        $this->mount();

        session()->flash('message', "$itemName deleted successfuly");
    }
}
