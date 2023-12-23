<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use App\Models\Todo;
use Illuminate\Foundation\Application;
use Illuminate\Support\Str;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class TodoList extends Component
{
    use RendersJavaScript;

    public $isVisible = true;

    public $id;
    public $mingleId;

    public function render()
    {
        $this->mingleId = 'mingle-' . Str::random();
        $this->id = $this->mingleId;

        return view('livewire.todo-list');
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
    }

    #[Renderless]
    public function updateTodo($value, $id)
    {
        Todo::find($id)->update([
            'is_complete' => $value,
        ]);
    }

    #[Renderless]
    public function laravelVersion()
    {
        return "Laravel version: ".Application::VERSION;
    }

    public function component(): string
    {
        return 'TodoList';
    }
}
