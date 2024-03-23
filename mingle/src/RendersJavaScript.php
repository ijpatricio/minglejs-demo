<?php

namespace Ijpatricio\Mingle;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

trait RendersJavaScript
{
    public $mingleId;

    public function componentKey(): string
    {
        return Str::before($this->component(), '/');
    }

    public function mingleBoot(Collection $data): Collection
    {
        //

        return $data;
    }

    public function mingleData(Collection $data): Collection
    {
        //

        return $data;
    }

    public function mountRendersJavaScript()
    {
        ray('mount trait');

        $this->mingleId = 'mingle-' . Str::random();
    }

    public function render()
    {

        return view('mingle::mingle');
    }
}
