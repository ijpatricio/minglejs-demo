@push('head-scripts')
    @vite($script_path)
@endpush

@pushonce('scripts')
{{--    <script>--}}
{{--        const--}}
{{--            componentKey = '{{ $this->componentKey() }}',--}}
{{--            mingleId = '{{ $this->mingleId }}',--}}
{{--            wireId = '{{ $_instance->getId() }}'--}}

{{--        window.Mingle.Elements[componentKey].boot(mingleId, wireId)--}}
{{--    </script>--}}
@endpushonce

<div
    x-init="
        console.log('YYYYY', window.Mingle.Elements['{{ $this->component() }}'])
        console.log(
        111,
            $refs.mingleEl
        )
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
            x-ref="mingleEl"
            id="{{ $this->mingleId }}"
            data-wire-id="{{ $_instance->getId() }}"
            data-script-path="{{ $this->component() }}"
            data-mingle-boot="{{ json_encode($this->mingleBoot(collect())) }}"
            data-mingle-data="{{ json_encode($this->mingleData(collect())) }}"
        ></div>
    </div>
</div>

