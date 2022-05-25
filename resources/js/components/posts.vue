<template>
    <div class="accordion accordion-flush" id="posts"
         style="padding-right: 300px; padding-left: 300px; padding-top: 100px ">
        <div v-for="(author, index) in authors" class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        :data-bs-target="'#item-' + index"
                        :aria-controls="'item-' + index">
                    {{ author.split(';')[0] }}
                </button>
            </h2>
            <div :id="'item-' + index" class="accordion-collapse collapse" aria-labelledby="'item-' + index" data-bs-parent="#posts">
                <div class="accordion-body">
                    <post v-bind:authorPosts="authorPosts(author.split(';')[2])"></post>
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
        return {
            authorPosts: function (authorId) {
                return this.allPosts.filter(item => item.user_id == authorId)
            }
        }
    },
    mounted() {

    },
    methods: {},
    computed: {
        authors() {
            return [...new Set((this.allPosts).map(item => item.first_name.concat(' ', item.last_name).concat('; ', item.email).concat('; ', item.user_id)))]
        },
    }
}
</script>


<style scoped>
</style>
