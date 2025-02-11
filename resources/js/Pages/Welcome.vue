<script setup>
import {ref} from 'vue'
import MainLayout from './MainLayout.vue';
import LoremText from './LoremText.vue';


const message = ref("This is an Inertia App.")

</script>

<template>

<MainLayout>
    <h1 class="headOne">Hello World!</h1>
        <LoremText>
            <!-- LoremText.vue Template -->
        </LoremText>
</MainLayout>


</template>
