<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Message extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'Message/index.js';
    }

    public function mingleData(Collection $data): Collection
    {
        if (! File::exists(base_path('message.txt'))) {
            File::put(base_path('message.txt'), 'This is a message from the server'.PHP_EOL);
        }

        $message = File::get(base_path('message.txt'));

        $data->put('message', $message);

        return $data;
    }

    #[Renderless]
    public function save($message)
    {
        File::put(base_path('message.txt'), $message.PHP_EOL);
    }
}
