import Vue from 'vue';
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        cart:JSON.parse(localStorage.getItem('cart')) || []
    },
    mutations: {
        addToCart(state,curso){
            state.cart.push(curso);
        },

    },
    getters:{
        cartSize(state){
            return state.cart.length
        }
    }
})