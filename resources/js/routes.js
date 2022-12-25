import { createWebHistory, createRouter } from "vue-router";
import home from "./components/home.vue";
import posts from "./components/posts.vue";
import login from "./components/login.vue";
import notFound from "./components/notFound.vue";
import gallery from "./components/gallery.vue";

const routes = [
    {
        path: "/:catchAll(.*)",
        component: notFound
    },
    {
        path: '/home',
        component: home
    },
    {
        path: '/posts',
        component: posts
    },
    {
        path: '/login',
        component: login
    },
    {
        path: '/gallery',
        component: gallery
    },
];

const router = createRouter({
    history: createWebHistory(),
    linkActiveClass: 'active',
    routes,
});

export default router;
