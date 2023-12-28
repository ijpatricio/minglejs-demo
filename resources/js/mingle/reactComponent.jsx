import React from 'react'
import {createRoot} from 'react-dom/client'

const createComponent = (el, mingleId, wireId, Component) => {

    const wire = window.Livewire.find(wireId)

    el.dataset.reactApp = 'true'

    const root = createRoot(el)

    root.render(<Component wire={wire} wireId={wireId} mingleData={JSON.parse(el.dataset.mingleData)} />)
}

const createReactComponent = (mingleId, wireId, Component, ) => {

    Livewire.hook('element.init', ({el}) => {
        const targetElement = el.querySelector(`#${mingleId}`)


        if (!targetElement || targetElement.dataset.reactApp) {
            return
        }

        createComponent(targetElement, mingleId, wireId, Component)
    })

}

export default createReactComponent
