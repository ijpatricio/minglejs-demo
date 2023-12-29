@extends('layouts.app')

@section('body')

    <div class="flex w-full justify-center mt-4">
        <x-navbar />
    </div>

    <div class="flex min-h-screen items-center justify-center flex-col gap-y-4">

        <h1 class="text-2xl font-bold">Welcome, let's reuse State JS!</h1>

        <livewire:message />

        <div class="text-xs p-2 rounded-lg text-gray-800 bg-gray-100">
            <p>We can have multiple "Islands" and share state or composables.</p>
        </div>

        <livewire:message />

    </div>

    <livewire:toaster />
@endsection
