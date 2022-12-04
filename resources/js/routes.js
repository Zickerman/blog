import posts from "./components/posts";
import notFound from "./components/notFound";

export default {
    mode: 'history',
    routes: [
        {
            path: '*',
            component: notFound
        },
        {
            path: '/',
            component: test
        },
        {
            path: '/posts',
            component: posts
        }
    ]

};
