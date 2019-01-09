
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueAxios from 'vue-axios';
import axios from 'axios';
import VueRouter from 'vue-router';

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueAxios, axios, VueRouter );
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('growth-add-component', require('./components/AddGrowth.vue'));
Vue.component('growth-component', require('./components/GrowthComponent.vue'));
Vue.component('weight-component', require('./components/WeightComponent.vue'));
Vue.component('head-component', require('./components/HeadComponent.vue'));
Vue.component('fronthead-component', require('./components/FrontHeadComponent.vue'));
Vue.component('frontgrowth-component', require('./components/FrontGrowthComponent.vue'));
Vue.component('frontweight-component', require('./components/FrontWeightComponent.vue'));
Vue.component('chat-app', require('./components/ChatApp.vue'));
// Vue.component('example', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#app'
});
