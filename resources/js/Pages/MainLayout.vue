<script setup>
import {Link} from '@inertiajs/vue3'

</script>

<template>
    <nav class="flex justify-between p-5  bg-blue-500 shadow-xl fixed top-0 w-full">
        <div class="logo">
            <h1 class="text-2xl font-semibold ">My<span class="text-red-600/90">
                Awesome App
            </span> </h1>

        </div>
        <div class="">
            <Link href="/" class="links">Home</Link>
            <Link href="/products" class="links">Products</Link>
            <Link href="#" class="links">FAQ</Link>
            <Link href="#" class="links">Contact Us</Link>

        </div>
    </nav>

    <main class="my-20 min-h-screen">
    <slot />

    </main>

    <footer class=" bg-red-300 p-5">
        <p class="capitalize text-center">this is a footer</p>
    </footer>
</template>