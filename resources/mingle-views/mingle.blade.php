@props([
    'mingleId',
    'script_path',
])

@pushonce('head-scripts')
    <script type="module">
        window.Mingle = window.Mingle || {}
    </script>
@endpushonce

@pushonce('head-scripts')
    @vite($script_path)
@endpushonce

@push('scripts')
    <script type="module">
        console.log(2222)

        Mingle.init('{{ $this->mingleId }}', '{{ $_instance->getId() }}')
    </script>
@endpush

<div>
    <div id="{{ $this->mingleId }}-container" wire:ignore x-ignore>
        <div id="{{ $this->mingleId }}"></div>
    </div>
</div>

