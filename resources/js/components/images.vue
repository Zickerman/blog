<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6 thumb" v-for="image in images">
          <a :href='image.img_src' target="_blank">
            <img class="img-fluid" :src='image.img_src' alt="photos from NASA API">
          </a>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
import {ref} from "vue";


export default {

  async setup() {
    const images = ref(null);

    let random_sol = Math.floor(Math.random() * (3690 - 10)) + 10;
    const response = await axios.get('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=' + random_sol + '&page=1&api_key=mXEGK2cZ0IHfuMrJQFH8yuCYPFeHw2mZi9sT6RU7');
    images.value = response.data.photos.slice(0, 12);

    return {
      images
    };

  },


}
</script>

<style scoped>
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