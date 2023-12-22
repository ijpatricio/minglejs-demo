@pushonce('head-scripts')
    @vite('resources/js/components/TodoList/index.js',)
@endpushonce

@push('scripts')
    <script type="module">

        const targetId = 'join-{{ $this->id }}'

        const wire = () => window.Livewire.find('{{ $_instance->getId() }}')

        const createComponent = () => {
            window.JSComponents.TodoList.create(targetId, wire(), '{{ $_instance->getId() }}')
        }

        document.addEventListener('livewire:init', () => {
            // Runs after Livewire is loaded but before it's initialized
        })

        document.addEventListener('livewire:initialized', () => {
            // Runs immediately after Livewire has finished initializing
            createComponent()
        })

        document.addEventListener('DOMContentLoaded', () => {
            //
        })

        Livewire.hook('element.init', ({el}) => {
            const targetElement = el.querySelector(`#${targetId}`)
            if (targetElement) {
                createComponent()
            }
        })
    </script>
@endpush

<div>
    <div>
        <button
            x-on:click="$wire.isVisible = !$wire.isVisible ; $wire.$refresh()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        > Toggle visibility</button>
    </div>

    @if($isVisible)

        <div wire:ignore x-ignore>
            <div id="{{ $this->id }}"></div>
        </div>

        <div wire:ignore x-ignore>
            Baaz
        </div>

    @endif
</div>
