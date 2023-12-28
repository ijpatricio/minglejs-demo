<?php

namespace App\Livewire;

use App\Mingle\RendersJavaScript;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class HelloWorld extends Component
{
    use RendersJavaScript;

    public function component(): string
    {
        return 'HelloWorld/index.jsx';
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

    #[Renderless]
    public function countUsers()
    {
        return User::count();
    }
}
