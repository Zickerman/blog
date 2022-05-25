<template>
    <div class="accordion accordion-flush" id="post">
        <div v-for="(post, i) in authorPosts">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            :data-bs-target="'#i-' + i"
                            :aria-controls="'i-' + i">
                        {{ post.created_at.split(' ')[0] }}
                    </button>
                </h2>
                <div :id="'i-' + i" class="accordion-collapse collapse" aria-labelledby="'i-' + i"
                     data-bs-parent="#post">
                    <div class="accordion-body">
                        {{ post.text }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

export default {
    props: ['authorPosts']


}
</script>


<style scoped>
</style>
