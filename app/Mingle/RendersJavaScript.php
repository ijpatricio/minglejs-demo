<?php

namespace App\Mingle;

use Illuminate\Support\Str;

trait RendersJavaScript
{
    public $mingleId;

    public function componentKey(): string
    {
        return Str::before($this->component(), '/');
    }

    public function mountRendersJavaScript()
    {
        $this->mingleId = 'mingle-' . Str::random();
    }

    public function render()
    {
        $scriptPath = 'resources/js/mingles/' . $this->component();

        return view('mingle::mingle', [
            'mingleId' => $this->mingleId,
            'script_path' => $scriptPath,
        ]);
    }
}
