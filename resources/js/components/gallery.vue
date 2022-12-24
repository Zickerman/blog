<template>
  <div>
    <div class="gallery">
      <NavBar></NavBar>

      <div class="container">

        <div class="row">
          <spiner v-if="loading"></spiner>
          <div v-else class="col-lg-3 col-md-4 col-6 thumb" v-for="image in images">
            <a :href='image.img_src' target="_blank">
              <img class="img-fluid" :src='image.img_src' alt="photos from NASA API">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from "./NavBar.vue";
import spiner from "./spiner.vue";


export default {
  name: "gallery",
  components: {
    NavBar,
    spiner,
  },

  data() {
    return {
      images: {},
      loading: true,
    }
  },
  created() {
    let random_sol = Math.floor(Math.random() * (3690 - 10)) + 10;
    axios.get('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=' + random_sol + '&page=1&api_key=mXEGK2cZ0IHfuMrJQFH8yuCYPFeHw2mZi9sT6RU7')
        .then(response => {
          let {data} = response;
          this.images = data.photos.slice(0, 12);
          this.loading = false;
        });
  },
  async setup(){

  }
}
</script>

<style scoped>
.gallery {
  /*background: #2c3034;*/
}

.thumb img {
  filter: none;
  border-radius: 5px;
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 2px;
}

.thumb {
  padding: 5px;
}

</style>