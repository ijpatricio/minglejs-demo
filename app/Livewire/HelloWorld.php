<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use Livewire\Component;

class HelloWorld extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'HelloWorld/index.jsx';
    }
}
