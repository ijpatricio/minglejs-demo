import { createReact } from './reactComponent.jsx'
import { createVue } from './vueComponent.js'

const Mingle = {
    Elements: {},
}

window.Mingle = window.Mingle || Mingle

const registerVueMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(el, mingleId, wireId) {
            createVue(mingleId, wireId, component)
        }
    }
}

const registerReactMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(el, mingleId, wireId) {
            createReact(el, mingleId, wireId, component)
        }
    }
}

export {registerReactMingle}
export {registerVueMingle}

export default Mingle
