<script setup>
import { Link, usePage, useForm } from '@inertiajs/vue3';

const page = usePage();
const isAuthenticated = page.props.auth?.user !== null;

const form = useForm({});

const logout = () => {
    form.post('/logout');
};
</script>

<template>
    <nav class="flex justify-between items-center p-[10px] bg-blue-500 shadow-xl fixed top-0 w-full">
        <div class="logo">
            <h1 class="text-2xl font-semibold">
                My
                <span class="text-blue-200">
                    Awesome App
                </span>
            </h1>
        </div>
        <div class="flex flex-col md:flex-row">
            <Link href="/home" class="links">Home</Link>
            <template v-if="isAuthenticated">
                <Link href="/products" class="links">Products</Link>
            </template>
            <Link href="/questions" class="links">FAQ</Link>
            <Link v-if="!isAuthenticated" href="/login" class="links">Login</Link>
            <button v-if="isAuthenticated" @click="logout" class="links">
                Logout
            </button>
        </div>
    </nav>

    <main class="my-20 min-h-screen">
        <slot />
    </main>

    <footer class="bg-blue-500 p-5">
        <p class="text-white font-bold uppercase text-center">this is a footer</p>
    </footer>
</template>
