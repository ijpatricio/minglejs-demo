import React from 'react'
import {createRoot} from 'react-dom/client'


function createComponent(id, Component, wire, wireId) {
    const rootElement = document.getElementById(id)

    if (! rootElement) {
        return
    }

    const root = createRoot(rootElement)

    root.render(<Component wire={wire} wireId={wireId} />)
}


export default createComponent
