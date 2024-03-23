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

export { createComponent as createVue }
