export default (mingleId, resolveWire) => {

    const targetId = mingleId
    const targetContainerId = `${targetId}-container`

    const wire = resolveWire()

    const createComponent = (targetElement = null) => {
        let el = targetElement

        if (!el) {
            el = document.querySelector(`#${targetId}`)
        }

        if (!el) {
            return
        }

        if (el.__vue_app__) {
            return
        }

        window.Mingle.TodoList.create(el, wire(), '{{ $_instance->getId() }}')
    }

    document.addEventListener('livewire:initialized', () => {
        const targetElement = document.querySelector(`#${targetId}`)
        if (targetElement && !targetElement.__vue_app__) {
            createComponent(targetElement)
        }
    })

    Livewire.hook('element.init', ({el}) => {
        const targetElement = el.querySelector(`#${targetId}`)
        if (targetElement && !targetElement.__vue_app__) {
            createComponent(targetElement)
        }
    })

    Livewire.hook('morph.removing', ({el}) => {
        if (el.id === targetContainerId) {
            el.firstElementChild.__vue_app__.unmount()
        }
    })

}
