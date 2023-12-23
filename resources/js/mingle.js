import {createApp} from 'vue/dist/vue.esm-bundler'
import createComponent from '@/mingle/reactComponent.jsx'

const mingleVue = (name, component) => {
    window.Mingle[name] = {
        create(id, $wire, wireId) {

            let el = id

            if(typeof id === 'string') {
                el = document.getElementById(id)
            }

            if (el) {
                const app = createApp(
                    component, {
                        wire: $wire,
                        wireId,
                    }
                )

                app.mount(el)
            }
        }
    }
}

const mingleReact = (name, component) => {
    window.Mingle[name] = {
        create(id, $wire, wireId) {
            createComponent(id, component, $wire, wireId)
        }
    }
}

export { mingleReact }
export { mingleVue }
