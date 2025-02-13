<script setup>
import { ref } from 'vue';
import MainLayout from './MainLayout.vue';
import ProductCard from '../Component/ProductCard.vue';

</script>

<template>
 <MainLayout>
    <div class="text-center">
      <h1 class="headOne">Products</h1>
            <ProductCard>

            </ProductCard>
    </div>
 </MainLayout>
</template>
