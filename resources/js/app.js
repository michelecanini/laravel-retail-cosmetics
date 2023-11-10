import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
//import jQuery from 'jquery';
//window.$ = jQuery;
import.meta.glob([
    '../img/**'
])

// importazione vuejs
import { createApp } from 'vue';
import AppHeader from "./components/AppHeader.vue";
import AppCarousel from "./components/AppCarousel.vue";
import AppMain from "./components/AppMain.vue";

const app = createApp({
    components: {
        AppHeader,
        AppCarousel,
        AppMain,

    }
})
app.mount("#app");

