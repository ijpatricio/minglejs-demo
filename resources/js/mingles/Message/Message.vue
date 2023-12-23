<script setup>
import Toaster from '@/components/ui/toast/Toaster.vue'
import {useToast} from '@/components/ui/toast/use-toast'
import {useMouse} from '@/composables/useMouse'
import useMessage from '@/composables/useMessage'
import {Input} from '@/components/ui/input'
import {Button} from '@/components/ui/button'

const {toast} = useToast()

const props = defineProps({
    wire: {},
    wireId: {},
    initialData: {},
})

const {message} = useMessage()

message.value = props.initialData.message

const {x, y} = useMouse()

const save = () => {
    props.wire.save(message.value)
        .then(() => {
            toast({
                title: 'Success!',
                description: 'Succesfully saved message',
            })
        })
        .catch(() => {
            toast({
                title: 'Error!',
                description: 'Failed to save message',
            })
        })
}

</script>

<template>
    <div>
        <div class="my-4">
            <Input v-model="message"/>
            <Button @click="save" class="min-w-24"> Save</Button>
        </div>
        <p v-text="message"/>
        <div>
            <p>Mouse position is at: {{ x }}, {{ y }}</p>
        </div>

    </div>
    <Toaster/>
</template>
