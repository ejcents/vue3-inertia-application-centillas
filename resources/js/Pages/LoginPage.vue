<script setup>
import { useForm } from '@inertiajs/vue3';
import MainLayout from './MainLayout.vue';

const form = useForm({
    email: '',
    password: '',
});

const login = () => {
    form.post('/login', {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <MainLayout>
        <div class="flex justify-center mt-[-100px] items-center min-h-screen">
            <div class="bg-white p-8 shadow-lg rounded-lg w-96">
                <h2 class="text-2xl font-bold text-center mb-4">Login</h2>

                <form @submit.prevent="login">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input v-model="form.email" type="email" class="w-full p-2 border rounded-md">
                        <p v-if="form.errors.email" class="text-red-500 text-sm">{{ form.errors.email }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input v-model="form.password" type="password" class="w-full p-2 border rounded-md">
                        <p v-if="form.errors.password" class="text-red-500 text-sm">{{ form.errors.password }}</p>
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </MainLayout>
</template>
