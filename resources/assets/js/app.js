
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import router from './routes';

// Vue.component('home-component', require('./components/HomeComponent.vue').default);

new Vue({ 
    el: '#app',
    router: router
});




