/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueIziToast from 'vue-izitoast'
import "izitoast/dist/css/iziToast.css";
import router from './router'
import store from "./store";
import App from './components/App'
require('./bootstrap');
window.Vue = require('vue');

Vue.component('shopping-icon',
    require('./components/ShoppingIcon.vue').default);

Vue.use(VueIziToast);

const app = new Vue({
    el: '#app',
    components: {App},
    router,
    store
});


