<template>
    <div>
        <h1>Hasil Tes Gaya Belajar</h1>
        <div v-for="(gaya, index) in hasil" :key="index" class="gaya-belajar">
            <img :src="gaya.image" :alt="gaya.type" />
            <p>{{ gaya.type }} - {{ gaya.percentage }}%</p>
            <p>{{ gaya.description }}</p>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const hasil = ref([
    { type: 'Kinestetik', percentage: 40, image: '../../assets/images/kinestetik.png', description: 'Penjelasan gaya belajar kinestetik' },
    { type: 'Visual', percentage: 35, image: '../../assets/images/visual.png', description: 'Penjelasan gaya belajar visual' },
    { type: 'Auditori', percentage: 25, image: '../../assets/images/auditori.png.jpg', description: 'Penjelasan gaya belajar auditori' },
]);
</script>

<style>
.gaya-belajar {
    /* Style untuk hasil tes */
}
</style>
