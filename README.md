# What is this?

This is a way of using Vue/React components in a Laravel Livewire app.

It's very different from an SPA or Inertia, because we can use Livewire, Alpine, Vue and React, all in the same app.
This is very convenient because say:
- we want to use a couple of Vue components on an individual marketing page
- on another one we want to use React because of a specific component
- also we want to use Livewire on another

Well now you can.

Most likely you will pair Livewire with just one taste of JS framework, but you can mix and match as you wish.

# Why?

- Landing pages, marketing pages, etc. => Plenty of React/Vue components.
- JS ecosystem has an infinite amount of tools and libraries.
- We want to use Vue and React, but I don't want to use SPA nor Inertia.
  - I want to use Blade and Livewire, while keeping the possibility to use Vue/React components.
- Being on Blade, SSR for SEO is there right from the beginning.
- You might be thinking you're thinking we should use vanilla JS/jQuery plugins, implementing in Alpine.
  - But I ask: why is that? Some JS frameworks elevate a lot the DX and tooling.
- Having a Livewire component as a container, in our Vue/React component we get to call PHP functions simply by calling `$wire.method()`. We don't have to write an Ajax request, a route, a controller, etc.  

# How?

// 

# In the works

- SPA: Check wire:navigate and `@persist`. You can use them to persist state between pages. 
- Nested components.
- JS add later in the DOM.
