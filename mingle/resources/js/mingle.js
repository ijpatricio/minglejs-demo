import bootReactComponent from './reactComponent.jsx'
import bootVueComponent from './vueComponent.js'

const Mingle = {
    Elements: {},
}

window.Mingle = window.Mingle || Mingle

const registerVueMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(mingleId, wireId) {
            bootVueComponent(mingleId, wireId, component)
        }
    }
}

const registerReactMingle = (name, component) => {
    Mingle.Elements[name] = {
        boot(mingleId, wireId) {
            bootReactComponent(mingleId, wireId, component)
        }
    }
}

export {registerReactMingle}
export {registerVueMingle}

export default Mingle
