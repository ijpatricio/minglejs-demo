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
        const
            componentKey = '{{ $this->componentKey() }}',
            mingleId = '{{ $this->mingleId }}',
            wireId = '{{ $_instance->getId() }}'

            window.Mingle[componentKey].create(mingleId, wireId)
    </script>
@endpush

<div>
    <div id="{{ $this->mingleId }}-container" wire:ignore x-ignore>
        <div id="{{ $this->mingleId }}"></div>
    </div>
</div>

