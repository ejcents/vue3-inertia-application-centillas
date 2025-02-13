<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import MainLayout from './MainLayout.vue';
import Description from './WelcomeDescription.vue';

const user = computed(() => usePage().props.auth.user);
</script>

<template>
  <MainLayout>
    <h1 class="headOne">Hello {{ user?.name || 'Guest' }}!</h1>
    <Description />
  </MainLayout>
</template>
