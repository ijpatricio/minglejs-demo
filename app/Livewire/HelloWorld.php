<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class HelloWorld extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'HelloWorld/index.jsx';
    }

    public function initialData(Collection $data): Collection
    {
        $data->put('message', 'This is a message from the server');

        $data->put('todos', Todo::all());

        return $data;
    }

    #[Renderless]
    public function countUsers()
    {
        return User::count();
    }
}
