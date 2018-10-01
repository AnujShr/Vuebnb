import 'core-js/fn/object/assign';
import './helpers';
import Vue from 'vue';
import ListingPage from './components/ListingComponent.vue'

const app = new Vue({
    el: '#app',
    render: h => h(ListingPage)

});
