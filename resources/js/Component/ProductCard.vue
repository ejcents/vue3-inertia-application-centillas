```javascript
<script setup>
import { ref } from 'vue';
import menudeImage from './menude.jpg';
import adoboldImage from './adobold.jpg';
import afritadaksImage from './afritadaks.jpg';

const dishes = ref([
  {
    name: 'Menude',
    description: 'A traditional Mexican dish made with tripe.',
    image: menudeImage,
  },
  {
    name: 'Adobold',
    description: 'Evenly-cut chunks of meat are first seared in hot fat or oil until they brown.',
    image: adoboldImage,
  },
  {
    name: 'Afritadaks',
    description: 'Evenly-cut chunks of meat are first seared in hot fat or oil until they brown.',
    image: afritadaksImage,
  },
]);
</script>

<template>
  <div class="place-items-center justify-center grid grid-cols-1 md:grid-cols-3 m-10">
    <div v-for="dish in dishes" :key="dish.name" class="cards h-[250px] w-[400px] flex flex-col">
      <img class="object-cover h-1/2 w-full" :src="dish.image" :alt="`Image of ${dish.name}`">
      <div class="px-6 py-4 flex-1">
        <div class="font-bold text-xl mb-2">{{ dish.name }}</div>
        <p class="text-gray-700 text-base">{{ dish.description }}</p>
      </div>
    </div>
  </div>
</template>
```