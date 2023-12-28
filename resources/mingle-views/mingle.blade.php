@push('head-scripts')
    @vite($script_path)
@endpush

@push('scripts')
    <script type="module">
        const
            componentKey = '{{ $this->componentKey() }}',
            mingleId = '{{ $this->mingleId }}',
            wireId = '{{ $_instance->getId() }}'

        window.Mingle.Elements[componentKey].boot(mingleId, wireId)
    </script>
@endpush

<div>
    <div id="{{ $this->mingleId }}-container" wire:ignore x-ignore>
        <div
            id="{{ $this->mingleId }}"
            data-mingle-boot="{{ json_encode($this->mingleBoot(collect())) }}"
            data-mingle-data="{{ json_encode($this->mingleData(collect())) }}"
        ></div>
    </div>
</div>

