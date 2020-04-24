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
        },

    },
    mutations: {
        addToCart(state,curso){
            state.cart.cursos.push(curso);
            this.commit('actualizarPrecios');

        },
        removeFromCart(state,_curso){
            state.cart.cursos = state.cart.cursos.filter(curso => {
                return curso.curso_id !== _curso.curso_id;
            });
            this.commit('actualizarPrecios');
        },
        actualizarPrecios(state){   // mutacion privada (auxiliar)
            // checar tipo de usuario
            let precios = state.cart.cursos.map( curso => {
                return parseFloat(curso.precio_estudiante_unam);
            }).sort();

            if (precios.length > 0 ){
                state.cart.subtotal = precios.reduce( (suma,desc) => {
                    return suma + desc;
                });
            }else {
                state.cart.subtotal = 0.0;
            }

            let multiploDescuento = parseInt(state.cart.cursos.length / 3); // 3x2
            let descuentos = precios.slice(0,multiploDescuento);
            console.log("mult-desc: ",multiploDescuento,"descs: ",descuentos);
            if (descuentos.length > 0){
                state.cart.descuento = descuentos.reduce( (suma,desc) => {
                    return suma + desc;
                });
            }else {
                state.cart.descuento = 0.0;
            }
            state.cart.total = state.cart.subtotal - state.cart.descuento;

            console.log(state.cart);
            localStorage.setItem('cart', JSON.stringify(state.cart));
        }

    },
    getters:{
        cartSize(state){
            return state.cart.cursos.length
        }
    }
})
