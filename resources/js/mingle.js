import {createApp} from 'vue/dist/vue.esm-bundler'

const register = (components) => {

    window.JSComponents = window.JSComponents || {}

    for (const [name, component] of Object.entries(components)) {
        window.JSComponents[name] = {
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

}


export default register
