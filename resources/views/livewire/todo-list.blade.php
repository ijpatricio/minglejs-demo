<x-joined script_path="resources/js/components/TodoList/index.js"/>

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
        <div class="flex flex-col gap-y-4 my-8">
            <div wire:ignore x-ignore>
                <div id="{{ $this->id }}"></div>
            </div>

            <div wire:ignore x-ignore>
                Baaz
            </div>
        </div>

    @endif
</div>
