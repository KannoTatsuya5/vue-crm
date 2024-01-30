<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const newTitle = ref('');
const newContent = ref('');
</script>

<template>
    Inertiaテストです。<br>
    <a href="/">aタグです</a><br>
    <Link href="/">Linkです</Link><br>
    <Link :href="route('inertia.index')">名前付きルート</Link><br>
    <Link :href="route('inertia.show', {id:1})">ルートパラメータ</Link>

    <div class="mt-4"></div>
    <input type="text" name="title" v-model="newTitle" id="">{{ newTitle }}<br>
    <input type="text" name="content" v-model="newContent" id="">{{ newContent }}<br>
    <Link as="button" method="POST" :href="route('inertia.store')" 
        :data="{
            title: newTitle,
            content: newContent
        }">保存テスト</Link>
</template>
