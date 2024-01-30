<script setup>
import { Inertia } from '@inertiajs/inertia';
defineProps({
    id : String,
    blog : Object
})

const deleteConfirm = (id) => {
    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか')
    })
}
</script>

<template>
    {{ id }}<br>
    {{ blog.tittle }}<br>
    <button class="bg-blue-500 p-3 m-3" type="button" @click="deleteConfirm(blog.id)">削除</button>
</template>
