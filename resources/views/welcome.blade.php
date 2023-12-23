@extends('layouts.app')

@section('body')

    <div class="flex min-h-screen items-center justify-center flex-col gap-y-4">

        <h1 class="text-2xl font-bold">Let's Mingle</h1>

        <div class="h-32"></div>

        <livewire:message />

        <livewire:hello-world />

        <livewire:message />

        <livewire:todo-list />

    </div>

@endsection
