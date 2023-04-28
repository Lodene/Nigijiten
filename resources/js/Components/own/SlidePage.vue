<script>
import { defineComponent } from 'vue'
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'

export default {
  name: 'SlidePage',
  props: {
    title: {
      type: String
    }
  },
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
}
</script> 
<template>
    <div>
        <h4 class="titre">{{ title }}</h4>
        <span class="bar"></span>
        <Carousel class="Slides">
            <Slide v-for="slide in 10" :key="slide">
            <div class="carousel__item">{{ slide }}</div>
            </Slide>

            <template #addons>
            <Navigation />
            </template>
        </Carousel>
    </div>
    
    
</template>

<style>
.titre {
    padding: 10px 0px 0px 10px;
    font-size: 19px;
}

.bar {
    display: block;
    width: 40%;
    height: 10px;
    border-radius: 5px;
    background-color: #BA1F33;
    margin: 5px 0;
}

#Slides .carousel__item {
  width: 100%;
  background-color: #18314F;
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

#Slides .carousel__prev,
#Slides .carousel__next {
  box-sizing: content-box;
}
</style>