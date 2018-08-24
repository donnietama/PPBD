import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './routes';
import axios from 'axios';


window.Vue = Vue;
Vue.use(VueRouter);

window.axios = axios;
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
}

Vue.component('hero-component', require('./components/HeroComponent'));
Vue.component('hero-component-full', require('./components/FullHeroComponent'));
Vue.component('login-button', require('./components/LoginButton'));
Vue.component('login-modal', require('./components/LoginModal'));

const app = new Vue({
    el: '#app',
    router
});
