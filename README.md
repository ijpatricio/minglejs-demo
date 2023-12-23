# Why?

- Landing pages, marketing pages, etc. => Plenty of React/Vue components.
- JS ecosystem has an infinite amount of tools and libraries.
- We want to use Vue and React, but I don't want to use SPA nor Inertia.
  - I want to use Blade and Livewire, while keeping the possibility to use Vue/React components.
- Being on Blade, SSR for SEO is there right from the beginning.
- You might be thinking you're thinking we should use vanilla JS/jQuery plugins, implementing in Alpine.
  - But I ask: why is that? Some JS frameworks elevate a lot the DX and tooling.
- Having a Livewire component as a container, in our Vue/React component we get to call PHP functions simply by calling `$wire.method()`. We don't have to write an Ajax request, a route, a controller, etc.  
