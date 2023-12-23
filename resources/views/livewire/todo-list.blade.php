<x-mingle script_path="resources/js/components/TodoList/index.js"/>

<div>
    <div>
        <button
            x-on:click="$wire.isVisible = !$wire.isVisible ; $wire.$refresh()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        >
            Toggle visibility
        </button>
    </div>

    @if($isVisible)
        <div id="{{ $this->mingleId }}-container" wire:ignore x-ignore>
            <div id="{{ $this->mingleId }}"></div>
        </div>
    @endif
</div>
