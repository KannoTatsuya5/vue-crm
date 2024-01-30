<script setup>
import { Link } from "@inertiajs/inertia-vue3";
    defineProps({
        blogs: Array
    })
</script>
<template>
    <div class="bg-blue-500" v-if="$page.props.flash.success">
        {{ $page.props.flash.success }}
    </div>
    <div>
        <ul>
            <li v-for="blog in blogs" :key="blog.id">
                件名: <Link class="text-blue-400" :href="route('inertia.show', { id:blog.id })">{{ blog.tittle }}</Link>
                本文: {{ blog.content }}
            </li>
        </ul>
    </div>
</template>
