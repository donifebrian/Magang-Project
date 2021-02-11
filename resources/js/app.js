import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
import routes from './router';

Vue.component('navigation', require('./components/Navigation.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('bawahan', require('./components/Bawahan.vue').default);

const app = new Vue({
    el: '#app',
    mode: 'history',
    router: new VueRouter(routes),

});