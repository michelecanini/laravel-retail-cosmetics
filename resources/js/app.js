import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
// importazione vuejs
import { createApp } from 'vue';
import Example from "./components/Example.vue";
const app = createApp({
    components: {
        Example,
    }
})
app.mount("#app");