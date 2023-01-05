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

      <div class="row">
        <div class="input-group mb-3">
          <button class="btn btn-primary me-auto p-2">Learn more</button>
        </div>

        <div class="input-group mb-2">
          <input v-model="search" type="text" class="form-control" placeholder="Find ...   Type post's title"
                 aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="accordion" id="posts">
          <div v-for="(authorWithPosts, index) in searchHandler" class="accordion-item">
            <h2 class="accordion-header" :id="'author-' + index">
              <button class="accordion-button" :class="{collapsed : rollUp}" type="button"
                      data-bs-toggle="collapse"
                      :data-bs-target="'#item' + index"
                      aria-expanded="false"
                      :aria-controls="'item' + index">
                {{ authorWithPosts.name }}
              </button>
            </h2>
            <div :id="'item' + index" class="accordion-collapse" :class="{collapse: rollUp}"
                 :aria-labelledby="'#author-' + index"
                 data-bs-parent="#posts">
              <div class="accordion-body">
                <post v-if="searchHandler[index]" :authorPosts="searchHandler[index]"></post>
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
      search: '',
      authorsWithPosts: {},
      rollUp: true,
    }
  },

  created() {
    axios
        .get('/api/posts')
        .then(response => (this.authorsWithPosts = response.data));
  },

  methods: {},
  computed: {
    searchHandler() {
      return this.authorsWithPosts.filter(el => {

        for (var i = 0; el.posts.length > i; i++) {

          if (this.search === '') {
            this.rollUp = true;
            return true;
          }
          else if (el.posts[i].title.toLowerCase().includes(this.search.toLowerCase())) {
            this.rollUp = false;
            return el.posts[i].title.toLowerCase().includes(this.search.toLowerCase());
          }
        }
      })
    }
  }
}
</script>


<style scoped>
</style>
