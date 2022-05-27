window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import VueRouter from 'vue-router'
import App from "./views/App.vue";

window.Vue.use(VueRouter);

import Home from "./pages/Home";
import Posts from "./pages/Posts";
import AboutUs from "./pages/AboutUs";
import ContactUs from "./pages/ContactUs";
import NotFound from "./pages/NotFound";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
        {
            path: '/about-us',
            name: 'about-us',
            component: AboutUs
        },
        {
            path: '/contact-us',
            name: 'contact-us',
            component: ContactUs
        },
        {
            path: '/not-found',
            name: 'not-found',
            component: NotFound
        }
    ]
})

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});