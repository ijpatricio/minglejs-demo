import createReactComponent from '@/mingle/reactComponent.jsx'
import createVueComponent from '@/mingle/vueComponent.js'

const Mingle = {
    Elements: {},
}

window.Mingle = window.Mingle || Mingle

const registerVueMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(mingleId, wireId) {
            createVueComponent(mingleId, wireId, component)
        }
    }
}

const registerReactMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(mingleId, wireId) {
            createReactComponent(mingleId, wireId, component)
        }
    }
}

export {registerReactMingle}
export {registerVueMingle}

export default Mingle
