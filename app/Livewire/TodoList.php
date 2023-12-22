<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class TodoList extends Component
{
    public $isVisible = false;

    public $id;

    public function mount()
    {
        $this->id = Str::random();
    }

    #[Renderless]
    public function randomText()
    {
        return Str::random(10);
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
