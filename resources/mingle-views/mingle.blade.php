@props([
    'mingleId',
    'script_path',
])

@pushonce('head-scripts')
    @vite($script_path)
@endpushonce

@push('scripts')
    <script type="module">

        const targetId = '{{ $mingleId }}'

        const wire = () => window.Livewire.find('{{ $_instance->getId() }}')

        const createComponent = (targetElement = null) => {
            let el = targetElement

            if (!el) {
                el = document.querySelector(`#${targetId}`)
            }

            if (!el) {
                return
            }

            if (el.__vue_app__) {
                return
            }

            window.JSComponents.TodoList.create(el, wire(), '{{ $_instance->getId() }}')
        }

        document.addEventListener('livewire:initialized', () => {
            const targetElement = document.querySelector(`#${targetId}`)
            if (targetElement && !targetElement.__vue_app__) {
                createComponent(targetElement)
            }
        })

        Livewire.hook('element.init', ({el}) => {
            const targetElement = el.querySelector(`#${targetId}`)
            if (targetElement && !targetElement.__vue_app__) {
                createComponent(targetElement)
            }
        })

        Livewire.hook('morph.removing', ({el}) => {
            if (el.id === '{{ $mingleId }}-container') {
                el.firstElementChild.__vue_app__.unmount()
            }
        })
    </script>
@endpush

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
