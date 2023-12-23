import { reactive, toRefs, ref } from 'vue'

const state = reactive({
    message: '',
})

export default () => {
    const { message } = toRefs(state);

    return {
        message,
    }
}
