@extends('layouts.app')

@section('body')

    <div class="flex w-full justify-center mt-4">
        <x-navbar />
    </div>

    <div class="flex min-h-screen items-center justify-center flex-col gap-y-4">

        <h1 class="text-2xl font-bold">Welcome, let's Mingle JS!</h1>

        <livewire:message />

        <div class="text-xs p-2 rounded-lg text-gray-800 bg-gray-100">
            <p>This is an "Island" with a Vue component.</p>
            <p>It loads the contents from a file `message.txt`, and gets that data initialized in the component.</p>
            <p>We can then change the input, and save it back to the file - without additional routes nor controllers.</p>
            <p class="mt-2">Everything is Livewire!</p>
        </div>

    </div>

    <livewire:toaster />
@endsection
