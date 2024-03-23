<x-filament-panels::page>
    <div>
        @livewire(\App\Livewire\Message::class)

        @livewire(\App\Livewire\HelloWorld::class)

        @livewire(\App\Livewire\TodoList::class)

        <livewire:toaster />
    </div>
</x-filament-panels::page>
