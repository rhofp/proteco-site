import Vue from 'vue';
import VueRouter from 'vue-router';
import RootPage from './pages/RootPage';
import CursosPage from './pages/CursosPage';
import LoginPage from './pages/LoginPage';
import RegistroPage from './pages/RegistroPage';
import FaqPage from './pages/FaqPage';
import ConvocatoriaPage from './pages/ConvocatoriaPage';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes:[{
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
    }]

});
