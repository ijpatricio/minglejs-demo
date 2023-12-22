@extends('layouts.app')

@section('body')

    <div class="flex h-screen items-center justify-center flex-col gap-y-4">

        <div>Welcome to Joined</div>

{{--        <livewire:todo-list :is-visible="true"/>--}}

        <livewire:todo-list :is-visible="true"/>

        <livewire:todo-list />

    </div>

@endsection
