<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Str;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class TodoList extends Component
{
    public $isVisible = true;

    public $id;

    public function mount()
    {
        $this->id = 'joined-' . Str::random();
    }

    #[Renderless]
    public function getTodos()
    {
        return Todo::all();
    }

    #[Renderless]
    public function addTodo($todo)
    {
        Todo::create([
            'description' => $todo,
        ]);

        return Str::random(10);
    }

    #[Renderless]
    public function updateTodo($value, $id)
    {
        Todo::find($id)->update([
            'is_complete' => $value,
        ]);
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
