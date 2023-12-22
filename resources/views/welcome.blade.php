@extends('layouts.app')

@section('body')

    <div class="flex h-screen items-center justify-center flex-col gap-y-4">

        <div>Welcome to Fuse</div>

        <livewire:todo-list :is-visible="true"/>

        <livewire:todo-list />

{{--        @vite('resources/js/components/Message/index.js',)--}}
{{--        <div id="message1"></div>--}}
{{--        <script type="module">--}}
{{--            window.JSComponents.Message.create('message1', 'I\'m a wire for RPC');--}}
{{--        </script>--}}

    </div>

@endsection
