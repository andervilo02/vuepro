import Vue from 'vue/dist/vue.js';

Vue.component('Hello', require('./components/hello.vue'));

const app = new Vue({
  el: '#app'
});