<script setup>
import { Button } from '@/components/ui/button'
import { Switch } from '@/components/ui/switch'
import { Input } from '@/components/ui/input'
const props = defineProps({
    wire: {},
    wireId: {},
})

const message = 'I\'m a JS TodoList'
</script>

<template>
    <div class="mt-12">
        <p v-text="message" />

        <div class="flex gap-4 my-8">
            <Input v-model="todo"></Input>
            <Button @click="addTodo" class="min-w-24"> Add Todo  </Button>
        </div>

        <div>
            <ul>
                <li v-for="todo in todos" :key="todo.id">
                    <div class="flex gap-x-10 my-4">
                        <Switch @update:checked="updateTodo($event, todo.id)" :checked="todo.is_complete" />
                        <span v-text="todo.description" />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        todo: null,
        todos: [],
    }),
    async mounted() {
        console.log(
            await this.wire.laravelVersion()
        )
        this.getTodos()
    },
    methods: {
        getTodos() {
            this.wire.getTodos().then(data => this.todos = data)
        },
        addTodo() {
            this.wire.addTodo(this.todo).then(async (r) => {
                this.todo = null
                this.getTodos()
            })
        },
        updateTodo(value, id) {
            this.wire.updateTodo(value, id).then(async (r) => {
                this.getTodos()
            })
        },
    }
}
</script>
