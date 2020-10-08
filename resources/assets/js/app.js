
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import InstantSearch from 'vue-instantsearch';
import Vue from 'vue'
Vue.use(InstantSearch);
import algolia from './components/AlgoliaAutocomplete'

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { algolia }
})