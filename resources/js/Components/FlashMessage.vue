<script setup>
</script>

<template>
    <div v-if="$page.props.flash.success" class="bg-blue-300 text-white p-4">
        {{ $page.props.flash.success }}
    </div>
    <div v-if="$page.props.flash.error" class="bg-red-300 text-white p-4">
        {{ $page.props.flash.error }}
    </div>
</template>
