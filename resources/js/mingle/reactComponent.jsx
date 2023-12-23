import React from 'react'
import {createRoot} from 'react-dom/client'

const createComponent = (mingleId, wireId, Component, ) => {
    const el = document.getElementById(mingleId)

    if (! el) {
        return
    }

    const wire = window.Livewire.find(wireId)

    const root = createRoot(el)

    root.render(<Component wire={wire} wireId={wireId} />)
}

export default createComponent
