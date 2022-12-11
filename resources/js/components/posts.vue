<template>
  <div>
    <NavBar/>
    <div class="container">
      <h1 class="">Hello, world!</h1>
      <p>This is a Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>

    <div class="container">

      <div class="row">
        <div class="accordion" id="posts">
          <div v-for="(authorWithPosts, index) in authorsWithPosts" class="accordion-item">
            <h2 class="accordion-header" :id="'author-' + index">
              <button class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse"
                      :data-bs-target="'#item' + index"
                      aria-expanded="false"
                      :aria-controls="'item' + index">
                {{ authorWithPosts.name }}
              </button>
            </h2>
            <div :id="'item' + index" class="accordion-collapse collapse" :aria-labelledby="'#author-' + index"
                 data-bs-parent="#posts">
              <div class="accordion-body">
                <post v-if="authorsWithPosts[index]" :authorPosts="authorsWithPosts[index]"></post>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>

</template>


<script>

import post from "./post";
import NavBar from "./NavBar.vue";

export default {
  components: {
    post,
    NavBar,
  },

  data() {
    return {
      authorsWithPosts: {},
    }
  },

  mounted() {
    axios
        .get('/api/posts')
        .then(response => (this.authorsWithPosts = response.data));
  },

  methods: {},
}
</script>


<style scoped>
</style>
