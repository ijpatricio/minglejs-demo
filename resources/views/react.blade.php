@extends('layouts.app')

@section('body')

    <div class="flex w-full justify-center mt-4">
        <x-navbar />
    </div>

    <div class="flex min-h-screen items-center justify-center flex-col gap-y-4">

        <h1 class="text-2xl font-bold">Welcome, React JS!</h1>

        <livewire:hello-world />

    </div>

    <livewire:toaster />
@endsection
