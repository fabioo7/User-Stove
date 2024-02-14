/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//require('./components/Example');

import Vue from 'vue';
import axios from 'axios';

// Componente Vue.js para autocomplete de endereço
Vue.component('address-autocomplete', require('./components/AddressAutocomplete.vue').default);

// Inicializando a instância Vue
const app = new Vue({
    el: '#app',
});