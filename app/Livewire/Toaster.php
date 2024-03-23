<?php

namespace App\Livewire;

use Ijpatricio\Mingle\RendersJavaScript;
use Illuminate\Support\Collection;
use Livewire\Component;

class Toaster extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'resources/js/mingles/Toaster/index.js';
    }

    public function mingleBoot(Collection $data): Collection
    {
        $data->put('stopHydrateData', true);

        return $data;
    }
}
