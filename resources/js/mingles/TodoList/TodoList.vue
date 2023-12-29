<script setup>
import { Button } from '@/components/ui/button'
import { Switch } from '@/components/ui/switch'
import { Input } from '@/components/ui/input'
import {reactive, toRefs, onMounted, ref} from 'vue'

const props = defineProps({
    wire: {},
    wireId: {},
    mingleData: {},
})
const wire = props.wire

const message = ref('VueJS TodoList')

onMounted(
    () => wire.laravelVersion().then(data => message.value = message.value + ' <br> ' + data)
)

const todo = reactive({
    new: '',
    list: [...props.mingleData.todos],
})

const getTodos = () => {
    wire.getTodos().then(data => todo.list = data)
}

const addTodo = () => {
    wire.addTodo(this.todo).then(async (r) => {
        todo.new = ''
        getTodos()
    })
}
const updateTodo = (value, id) => {
    wire.updateTodo(value, id).then(async (r) => {
        getTodos()
    })
}

</script>

<template>
    <div class="my-10 bg-yellow-300 rounded-xl p-4">
        <p v-html="message" />

        <div class="flex gap-4 my-8">
            <Input v-model="todo.new"></Input>
            <Button @click="addTodo" class="min-w-24"> Add Todo  </Button>
        </div>

        <div>
            <ul>
                <li v-for="todo in todo.list" :key="todo.id">
                    <div class="flex gap-x-10 my-4">
                        <Switch @update:checked="updateTodo($event, todo.id)" :checked="todo.is_complete" />
                        <span v-text="todo.description" />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
