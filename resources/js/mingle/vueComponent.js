import {createApp} from 'vue/dist/vue.esm-bundler'

const createComponent = (mingleId, wireId, component) => {
    let el = document.querySelector(`#${mingleId}`)

    if (!el) {
        return
    }

    if (el.__vue_app__) {
        return
    }

    const wire = window.Livewire.find(wireId)

    const app = createApp(component, {wire, wireId})

    app.mount(el)
}

const createVueComponent = (mingleId, wireId, component) => {

    Livewire.hook('element.init', ({el}) => {
        const targetElement = el.querySelector(`#${mingleId}`)
        if (targetElement && !targetElement.__vue_app__) {
            createComponent(mingleId, wireId, component)
        }
    })

    // TODO: Check if we need to do this, or DOMContentLoaded on Blade Mingles (non-Livewire)
    // document.addEventListener('livewire:initialized', () => {
    //     const targetElement = document.querySelector(`#${mingleId}`)
    //     if (targetElement && !targetElement.__vue_app__) {
    //         createComponent(mingleId, wireId, component)
    //     }
    // })

    // TODO: When dealing with nested or DOM removals
    // Livewire.hook('morph.removing', ({el}) => {
    //     if (el.id === `${mingleId}-container`) {
    //         el.firstElementChild.__vue_app__.unmount()
    //     }
    // })

}

export default createVueComponent
