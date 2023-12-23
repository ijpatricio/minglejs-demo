import {createApp} from 'vue/dist/vue.esm-bundler'

const register = (components) => {

    window.Mingle = window.Mingle || {}

    for (const [name, component] of Object.entries(components)) {
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

}


export default register
