import bootReactComponent, { createReact } from './reactComponent.jsx'
import bootVueComponent, { createVue } from './vueComponent.js'

const Mingle = {
    Elements: {},
}

window.Mingle = window.Mingle || Mingle

document.addEventListener('alpine:init', () => {
    console.log('alpine:init')
})
document.addEventListener('alpine:initialized', () => {
    console.log('alpine:initialized')
})


const registerVueMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(el, mingleId, wireId) {
            console.log('booting ' + mingleId)
            // bootVueComponent(mingleId, wireId, component)
            createVue(mingleId, wireId, component)
        }
    }
}

const registerReactMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(el, mingleId, wireId) {
            console.log('booting ' + mingleId)
            // bootReactComponent(mingleId, wireId, component)
            createReact(el, mingleId, wireId, component)
        }
    }
}

document.addEventListener('livewire:navigated', () => {

    console.log('navigated')

    const elements = document.querySelectorAll('[id^="mingle-"]');

    console.log(elements)
    console.log(Mingle.Elements)

    elements.forEach((element) => {

        if(element.id.includes('-container')) {
            return
        }

        console.log('booting ' + element.dataset.scriptPath)

        Mingle.Elements[element.dataset.scriptPath].boot(element, element.id, element.dataset.wireId)

    })


    return
    console.log(targetElement)
    if (targetElement && !targetElement.__vue_app__) {
        createComponent(mingleId, wireId, component)
    }
})



export {registerReactMingle}
export {registerVueMingle}

export default Mingle
