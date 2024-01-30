<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
</script>

<template>
        <GuestLayout>
            <h3>何か文字を書く</h3>
            <InputLabel value="件名">タイトル</InputLabel>
            <TextInput></TextInput>
        </GuestLayout>
</template>
