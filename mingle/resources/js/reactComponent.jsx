import React from 'react'
import {createRoot} from 'react-dom/client'

const createComponent = (el, mingleId, wireId, Component) => {

    const wire = window.Livewire.find(wireId)

    el.dataset.reactApp = 'true'

    const root = createRoot(el)

    root.render(<Component wire={wire} wireId={wireId} mingleData={JSON.parse(el.dataset.mingleData)} />)
}

export { createComponent as createReact }
