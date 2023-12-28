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

    let mingleData = {}
    if (el.dataset.mingleData) {
        mingleData = JSON.parse(el.dataset.mingleData)
    }

    let mingleBoot = {}
    if (el.dataset.mingleBoot) {
        mingleBoot = JSON.parse(el.dataset.mingleBoot)
    }

    let props = {}

    if (! mingleBoot.stopHydrateData === true) {
        props = {
            wire, wireId, mingleData,
        }
    }

    const app = createApp(component, props)

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
