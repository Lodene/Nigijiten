<script setup>
import Header from '@/Components/own/Header.vue';
import Footer from '@/Components/own/Footer.vue';
import slot from '@/Pages/Home.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>

<template>
    <Header />
    <slot />
    <Footer />
</template>
