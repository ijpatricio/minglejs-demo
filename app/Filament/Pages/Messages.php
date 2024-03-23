<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Vite;

class Messages extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.messages';

    public function mount()
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn () => app(Vite::class)([
                'resources/js/mingles/Message/index.js',
                'resources/js/mingles/Toaster/index.js',
                'resources/js/mingles/TodoList/index.js',
                'resources/js/mingles/HelloWorld/index.jsx',
            ])
        );
    }
}
