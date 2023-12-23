<script setup>
import { ToastDescription } from "radix-vue";
import { cn } from "@/utils";

const props = defineProps({
  asChild: { type: Boolean, required: false },
  as: { type: null, required: false },
  class: { type: String, required: false },
});
</script>

<template>
  <ToastDescription
    :class="cn('text-sm opacity-90', props.class)"
    v-bind="props"
  >
    <slot />
  </ToastDescription>
</template>
