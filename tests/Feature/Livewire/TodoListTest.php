<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TodoList::class)
            ->assertStatus(200);
    }
}
