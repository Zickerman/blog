<template>
  <div class="back-g">
    <NavBar></NavBar>
    <h1>HELLO THIS IS MY FIRST BLOG</h1>
  </div>

</template>

<script>
import NavBar from "./NavBar.vue";

export default {
  name: "Home",
  components: {
    NavBar,
  },

}
</script>

<style scoped>
.back-g {
  height: 100vh;
  background: url("/img/home_page_bg.jpg") no-repeat;
  background-size: 100%;
}

h1 {
  color: white;
  text-align: center;
}
</style>