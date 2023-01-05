<template>
  <div>
    <div class="gallery">
      <NavBar></NavBar>
      <suspense>
        <template #default>
          <images/>
        </template>
        <template #fallback>

          <h1 class="row justify-content-center align-self-center">
            Images are loading, please wait ....
          </h1>

        </template>
      </suspense>
    </div>
  </div>
</template>

<script>
import NavBar from "./NavBar.vue";
import {defineAsyncComponent} from "vue";


export default {
  name: "gallery",
  components: {
    NavBar,
    images: defineAsyncComponent(() => import('./images.vue')),
  },
}
</script>

<style scoped>

</style>