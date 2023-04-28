<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import SlidePage from '@/Components/own/SlidePage.vue';
</script>

<template>
    <Head title="Home" />

    <MainLayout>
        <Carousel :wrapAround="true" id="MainMenu">
            <Slide v-for="slide in 10" :key="slide">
            <div class="carousel__item">{{ slide }}</div>
            </Slide>

            <template #addons>
            <Navigation />
            </template>
        </Carousel>
        <div class="container">
            <SlidePage title="Tendance Actuelle"/>
            <SlidePage title="Nouveautés"/>
            <SlidePage title="Les plus appréciés"/>
            <SlidePage title="Pour une soirée"/>
            <SlidePage title="Triste"/>
        </div>
        
    </MainLayout>

</template>

<style>
#MainMenu .carousel__item {
  min-height: 65vh;
  width: 100%;
  background-color: #18314F;
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

#MainMenu .carousel__prev,
#MainMenu .carousel__next {
  box-sizing: content-box;
}

.container {
    background-color: #384E77;
    min-width: 100vw;
}
</style>
