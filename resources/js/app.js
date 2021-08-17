require("./bootstrap");

window.Vue = require("vue");

import Vue from "vue";
import VueRouter  from 'vue-router'

import routes from "./routes";
import MainHeader from './components/Layout/MainHeader.vue'

Vue.use(VueRouter);
Vue.component("main-header", MainHeader); // we use this markup tag in the source blade file so that it shows on all files

const router = new VueRouter({
  history: false,
  mode: "history",
  routes
})


const app = new Vue({
  el: '#app',
  router
});
