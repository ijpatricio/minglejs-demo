import createReactComponent from '@/mingle/reactComponent.jsx'
import createVueComponent from '@/mingle/vueComponent.js'

const mingleVue = (name, component) => {
    window.Mingle[name] = {
        create(mingleId, wireId) {
            createVueComponent(mingleId, wireId, component)
        }
    }
}

const mingleReact = (name, component) => {
    window.Mingle[name] = {
        create(mingleId, wireId) {
            createReactComponent(mingleId, wireId, component)
        }
    }
}

export {mingleReact}
export {mingleVue}
