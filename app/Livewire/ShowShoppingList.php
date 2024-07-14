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

    public function finished($item): void
    {
        ShoppingList::findOrFail($item['id'])->update(['finished' => true]);
        $this->mount();
    }

    public function unfinished($item): void
    {
        ShoppingList::findOrFail($item['id'])->update(['finished' => false]);
        $this->mount();
    }

    public function clearList($id): void
    {
        ShoppingList::where('user_id', $id)->delete();
        $this->mount();

        session()->flash('message', "List has been cleared successfully");
    }
}
