<template>
  <header class="flex flex-wrap gap-5 justify-between my-auto px-14 py-7 w-full bg-white shadow-[0px_4px_4px_rgba(0,0,0,0.25)] max-md:px-5 max-md:max-w-full">
    <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600 animate-pulse">
            StudySync
        </h1>
    <nav class="flex flex-wrap gap-10 items-center max-md:max-w-full">
      <Link href="/" class="text-xl font-medium text-blue-500 hover:text-blue-700 transition-colors duration-300">
        Beranda
      </Link>
      <Link href="/tes-gaya-belajar" class="text-xl font-medium text-blue-500 hover:text-blue-700 transition-colors duration-300">
        Tes Gaya Belajar
      </Link>
      <Link href="/gaya-belajar" class="text-xl font-medium text-blue-500 hover:text-blue-700 transition-colors duration-300">
        Gaya Belajar
      </Link>
      <Link href="/kontak" class="text-xl font-medium text-blue-500 hover:text-blue-700 transition-colors duration-300">
        Kontak
      </Link>
      <button @click="login" class="px-6 py-2 text-xl font-bold text-white bg-blue-500 rounded-full hover:bg-blue-600 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Login
      </button>
    </nav>
  </header>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from './ApplicationLogo.vue';

export default {
  name: 'StudySyncHeader',
  components: {
    Link,
  },
  methods: {
    login() {
      this.$inertia.visit('/login');
    }
  }
};
</script>
