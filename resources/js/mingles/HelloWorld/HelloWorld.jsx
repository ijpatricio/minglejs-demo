import React from 'react'
import {createRoot} from 'react-dom/client'

function Component() {
    return (
        <div className="mt-5 text-center">
            <div className="text-indigo-500"><h2>React Component in Laravel</h2></div>
            <div className="card-body">Woohoo let's go!!</div>
        </div>
    )
}

export default function createComponent(id) {
    const rootElement = document.getElementById(id)

    document.addEventListener('livewire:initialized', () => {
        if (! rootElement) {
            return
        }

        const root = createRoot(rootElement)

        root.render(<Component/>)
    })
}
