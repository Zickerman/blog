import home from "./components/home";
import posts from "./components/posts";
import login from "./components/login.vue";
import notFound from "./components/notFound.vue";
import gallery from "./components/gallery.vue";

export default {
    mode: 'history',
    linkActiveClass: 'active',

    routes: [
        {
            path: '*',
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
        }
    ]

};
