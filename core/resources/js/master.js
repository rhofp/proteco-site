import Vue from "vue";
import Master from "./layouts/Master";

require('./bootstrap');
window.Vue = require('vue');

const master = new Vue({
    el: '#master',
    components: {Master},
});
