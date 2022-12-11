import home from "./components/home";
import posts from "./components/posts";
import login from "./components/login.vue";

export default {
    mode: 'history',
    linkActiveClass: 'active',

    routes: [
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
        }
    ]

};
