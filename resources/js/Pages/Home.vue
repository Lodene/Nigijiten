<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import SlidePage from '@/Components/own/SlidePage.vue';
import { defineProps, onMounted } from 'vue';
const props = defineProps({
  datas: Array
});


// Définition de la fonction onLoad
const onLoad = () => {
  console.log("id");
};

onMounted(() => {
  const items = document.querySelectorAll('.carousel__item');
  items.forEach(item => {
    item.addEventListener('load', () => onLoad());
  });
});
</script>

<template>
  <Head title="Home" />

  <MainLayout>
    <Carousel :wrapAround="true" id="MainMenu">
      <Slide v-for="data in datas" :key="data.id">
      <div class="carousel__item">
        <div :class="['haut', {'my-class': someCondition}]" :style="{ backgroundImage: `url(${data.attributes.coverImage.small})` }"></div>
        <div class="bas"><h2>{{ data.attributes.slug }}</h2></div>
      </div>
</Slide>


      <template #addons>
        <Navigation />
      </template>
      <Pagination />
    </Carousel>
    <div class="container">
      <SlidePage title="Tendance Actuelle" />
      <SlidePage title="Nouveautés" />
      <SlidePage title="Les plus appréciés" />
      <SlidePage title="Pour une soirée" />
      <SlidePage title="Triste" />
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
  flex-direction: column;
  justify-content: center;
  align-items: center;

}

#MainMenu .carousel__prev,
#MainMenu .carousel__next {
  box-sizing: content-box;
}

.container {
    background-color: #384E77;
    min-width: 100%;
}

.haut{
  height: calc(65vh / 2 );
  width: 100%;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100%;
}

.bas {
  height: calc(65vh / 2 );
  width: 100%;
}
</style>
