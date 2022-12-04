<template>
  <div class="accordion" id="posts">
    <div v-for="(authorWithPosts, index) in allPosts" class="accordion-item">
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
          <post v-if="allPosts[index]" v-bind:authorPosts="allPosts[index]"></post>
        </div>
      </div>
    </div>
  </div>
</template>


<script>

import post from "./post";

export default {
  components: {post},
  props: [
    'allPosts',
  ],
  data() {
    return {}
  },

  mounted() {
  },

  methods: {},
}
</script>


<style scoped>
</style>
