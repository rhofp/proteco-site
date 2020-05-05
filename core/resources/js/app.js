/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueIziToast from 'vue-izitoast'
import "izitoast/dist/css/iziToast.css";
import router from './client/router'
import store from "./client/store";
import App from './layouts/App'
require('./bootstrap');
window.Vue = require('vue');

Vue.component('shopping-icon',
    require('./client/components/ShoppingIcon.vue').default);

Vue.use(VueIziToast);

const app = new Vue({
    el: '#app',
    components: {App},
    router,
    store
});


