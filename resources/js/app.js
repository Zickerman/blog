require('./bootstrap');
import {createApp} from "vue";
import routes from "./routes";

createApp({})
    .use(routes)
    .mount('#app')