import Vue from 'vue';
import Vuex from 'vuex'
import cart from './cart.module'
import auth from './auth.module'
Vue.use(Vuex);

export default new Vuex.Store({
    modules :{
        auth,
        cart,
    }
})
