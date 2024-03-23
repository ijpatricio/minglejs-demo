@push('head-scripts')
    @vite($this->component())
@endpush

<div
    x-init="
        window.Mingle.Elements['{{ $this->component() }}']
            .boot(
                document.getElementById('{{ $this->mingleId }}'),
                '{{ $this->mingleId }}',
                '{{ $_instance->getId() }}',
            )
    "
>
    <div id="{{ $this->mingleId }}-container" wire:ignore x-ignore>
        <div
            id="{{ $this->mingleId }}"
            data-wire-id="{{ $_instance->getId() }}"
            data-script-path="{{ $this->component() }}"
            data-mingle-boot="{{ json_encode($this->mingleBoot(collect())) }}"
            data-mingle-data="{{ json_encode($this->mingleData(collect())) }}"
        ></div>
    </div>
</div>

