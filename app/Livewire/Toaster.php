<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use Livewire\Component;

class Toaster extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'Toaster/index.js';
    }
}
