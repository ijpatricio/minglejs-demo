<div>
    <ul class="flex gap-4">
        <a wire:navigate href="{{ route('home') }}">
            <li class="hover:bg-indigo-200 px-4 py-2 rounded-lg">Home</li>
        </a>
        <a wire:navigate href="{{ route('vue') }}">
            <li class="hover:bg-indigo-200 px-4 py-2 rounded-lg">Vue</li>
        </a>
        <a wire:navigate href="{{ route('vue-composables') }}">
            <li class="hover:bg-indigo-200 px-4 py-2 rounded-lg">Vue/Composables</li>
        </a>
        <a wire:navigate href="{{ route('react') }}">
            <li class="hover:bg-indigo-200 px-4 py-2 rounded-lg">React</li>
        </a>
    </ul>
</div>
