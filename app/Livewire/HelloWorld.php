<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use App\Models\User;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class HelloWorld extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'HelloWorld/index.jsx';
    }

    #[Renderless]
    public function countUsers()
    {
        return User::count();
    }
}
