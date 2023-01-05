require('./bootstrap');
import {createApp} from "vue";
import routes from "./routes";
// import  SkeletonPlugin from 'bootstrap-vue';
import Skeleton from 'vue-loading-skeleton';



createApp({})
    .use(routes)
    // .use(Skeleton)
    .mount('#app')