<script setup>
defineProps({
    wire: {},
})
const message = 'I\'m on a Vue Component!'
</script>

<template>
    <div>
        <p v-text="message" />
    </div>
</template>
