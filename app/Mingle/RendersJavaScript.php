<?php

namespace App\Mingle;

use Illuminate\Support\Str;

trait RendersJavaScript
{
    public $mingleId;

    public function mountRendersJavaScript()
    {
        $this->mingleId = 'mingle-' . Str::random();
    }

    public function render()
    {
        $scriptPath = 'resources/js/components/' . $this->component() . '/index.js';

        return view('livewire.mingle', [
            'mingleId' => $this->mingleId,
            'script_path' => $scriptPath,
        ]);
    }

}
