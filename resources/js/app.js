/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
import 'core-js/fn/object/assign';
import './helpers';
import {populateAmenitiesAndPrices} from "./helpers";

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('image-carousel', require('./components/ImageCarouselComponent.vue'));
Vue.component('modal-window', require('./components/ModalComponent.vue'));
Vue.component('header-image', require('./components/Listing/HeaderImageComponent'));
Vue.component('feature-list', require('./components/Listing/FeatureListComponent'));
let model = JSON.parse(window.vuebnb_listing_model);
model = populateAmenitiesAndPrices(model);
const app = new Vue({
    el: '#app',
    data: Object.assign(model, {
        contracted: true,
    }),
    methods: {
        openModal() {
            this.$refs.imagemodal.modalOpen = true;
        }
    }
});
