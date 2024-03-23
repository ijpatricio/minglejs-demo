<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Vite;

class TodoList extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.todo-list';

    public function mount()
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn () => app(Vite::class)([
                'resources/js/mingles/TodoList/index.js',
                'resources/js/mingles/Toaster/index.js',
            ])
        );
    }
}
