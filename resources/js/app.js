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
import AppScrollingText from "./components/AppScrollingText.vue";
import AppMain from "./components/AppMain.vue";
import AppFooter from "./components/AppFooter.vue";

const app = createApp({
    components: {
        AppHeader,
        AppCarousel,
        AppScrollingText,
        AppMain,
        AppFooter,
        
    }
})
app.mount("#app");


// modale di cancellazione profumi
const deleteSubmitButton = document.querySelectorAll('.delete-perfume-form button[type="submit"]');

deleteSubmitButton.forEach((button) =>{
    button.addEventListener('click', (event) => {
        event.preventDefault();
        const modal = document.getElementById('confirmPerfumeDelete');
        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();
        const buttonDelete = document.querySelector('.confirm-delete-button');

        buttonDelete.addEventListener('click', ()=> {
        button.parentElement.submit();
        });
    })
});