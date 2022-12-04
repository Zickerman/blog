<template>
  <div class="accordion accordion-flush" id="post">
    <div v-for="(post, i) in authorPosts.posts" class="accordion-item">
      <h2 class="accordion-header" :id="'post-' + i">
        <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse"
                :data-bs-target="'#i-' + i"
                aria-expanded="false"
                :aria-controls="'i-' + i">
          ({{ post.published_at }}) {{ post.title }}
        </button>
      </h2>
      <div :id="'i-' + i" class="accordion-collapse collapse" aria-labelledby="'#i-' + i"
           data-bs-parent="#post">
        <div class="accordion-body">
          {{ post.body }}
        </div>
      </div>
    </div>
  </div>
</template>


<script>

export default {
  props: [
    'authorPosts',
  ],


}
</script>


<style scoped>
</style>
