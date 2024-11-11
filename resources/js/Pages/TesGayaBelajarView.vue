<script setup lang="js">
import MainLayout from '@/Layouts/MainLayout.vue';
</script>

<template>
  <MainLayout>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Komponen Header -->
    <HeaderContent />

    <!-- Konten Utama -->
    <div class="flex flex-col items-center justify-center flex-grow p-6">
      <h1 class="text-5xl font-bold text-blue-500 mb-4">Tes Gaya Belajar</h1>
      <p class="text-xl text-center text-gray-700 mb-6">
        Temukan gaya belajar yang paling cocok untuk Anda! Ikuti tes ini untuk mendapatkan wawasan tentang cara belajar yang paling efektif.
      </p>
    </div>

    <!-- Komponen Footer -->
    <FooterContent />
  </div>
</MainLayout>
</template>