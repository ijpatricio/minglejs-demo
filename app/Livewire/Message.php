<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Message extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'Message/index.js';
    }

    public function initialData(Collection $data): Collection
    {
        if (! File::exists(base_path('message.txt'))) {
            File::put(base_path('message.txt'), 'This is a message from the server'.PHP_EOL);
        }

        $message = File::get(base_path('message.txt'));

        $data->put('message', $message);

        return $data;
    }

    public function save($message)
    {
        File::put(base_path('message.txt'), $message.PHP_EOL);
    }
}
