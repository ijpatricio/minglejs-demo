<script setup>
defineProps({
    wire: {},
    wireId: {},
})
const message = 'I\'m A TodoList'
</script>

<template>
    <div>
        <p v-text="message" />
    </div>
</template>

<script>
export default {
    async mounted() {
        console.log(
            await this.wire.randomText()
        )
    },
}
</script>
