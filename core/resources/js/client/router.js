import Vue from 'vue';
import VueRouter from 'vue-router';
import RootPage from './views/RootPage';
import CursosPage from './views/CursosPage';
import LoginPage from './views/LoginPage';
import RegistroPage from './views/RegistroPage';
import FaqPage from './views/FaqPage';
import ConvocatoriaPage from './views/ConvocatoriaPage';
import CartPage from './views/CartPage';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes:[
        {
            path: '/',
            component : RootPage,
            name : 'root'
        },{
            path : '/login',
            component : LoginPage,
            name : 'login'
        },{
            path : '/registrar',
            component : RegistroPage,
            name : 'registro'
        },{
            path : '/cursos',
            component : CursosPage,
            name : 'cursos'
        },{
            path : '/faq',
            component : FaqPage,
            name : 'faq'
        },{
            path : '/convocatoria',
            component : ConvocatoriaPage,
            name : 'convocatoria'
        },
        {
            path:'/cart',
            component: CartPage,
            name: 'cart'
        }
    ]

});
