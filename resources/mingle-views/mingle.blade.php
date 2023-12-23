@props([
    'mingleId',
    'script_path',
])

@pushonce('head-scripts')
    <script type="module">
        window.Mingle = window.Mingle || {}
    </script>
@endpushonce

@push('head-scripts')
    @vite($script_path)
@endpush

@push('scripts')
    <script type="module">

        console.log('Mingle init', window.Mingle)

        document.addEventListener('livewire:initialized', () => {
            window.Mingle['{{ $this->componentKey() }}']
                .create(
                    '{{ $this->mingleId }}',
                    window.Livewire.find('{{ $_instance->getId() }}'),
                    '{{ $_instance->getId() }}',
                )
        })


    </script>
@endpush

<div>
    <div id="{{ $this->mingleId }}-container" wire:ignore x-ignore>
        <div id="{{ $this->mingleId }}"></div>
    </div>
</div>

