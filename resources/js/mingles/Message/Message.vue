<script setup>
import { useMouse } from '@/composables/useMouse'
import useMessage from '@/composables/useMessage'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'

const props = defineProps({
    wire: {},
    wireId: {},
    initialData: {},
})

const { message } = useMessage()

const { x, y } = useMouse()

</script>

<template>
    <div>
        <div class="my-4">
            <Input v-model="message" />
        </div>
        <p v-text="message" />
        <div>
            <p>Mouse position is at: {{ x }}, {{ y }}</p>
        </div>
    </div>
</template>
