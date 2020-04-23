import Vue from 'vue';
import Vuex from 'vuex'

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        cart:JSON.parse(localStorage.getItem('cart')) || {
            cursos:[],
            subtotal:0.0,
            descuento : 0.0,
            total:0.0
        }
    },
    mutations: {
        addToCart(state,curso,usuario){
            state.cart.cursos.push(curso);
            // checar tipo de usuario
            let precio = parseFloat(curso.precio_estudiante_unam);
            state.cart.subtotal = state.cart.subtotal + precio;
            state.cart.total = state.cart.total + precio;

            if (state.cart.cursos.length % 3 === 0){
                state.cart.descuento = parseInt( state.cart.cursos.length / 3 ) * precio;
                state.cart.total = state.cart.subtotal - state.cart.descuento;
            }

            console.log(state.cart);
            localStorage.setItem('cart', JSON.stringify(state.cart));
        },

    },
    getters:{
        cartSize(state){
            return state.cart.cursos.length
        }
    }
})
