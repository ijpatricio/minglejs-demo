<?php

namespace App\Livewire;

use App\Models\Todo;
use Ijpatricio\Mingle\RendersJavaScript;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class TodoList extends Component
{
    use RendersJavaScript;

    public function mount()
    {
        ray('mount main');
    }

    public function component(): string
    {
        return 'TodoList/index.js';
    }

    public function mingleData(Collection $data): Collection
    {
        $data->put('message', 'This is a message from the server');

        $data->put('todos', Todo::all());

        return $data;
    }

    #[Renderless]
    public function getTodos(): EloquentCollection
    {
        return Todo::all();
    }

    #[Renderless]
    public function addTodo($todo)
    {
        if (blank($todo)) {
            dd('Todo cannot be blank');
        }

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
}
