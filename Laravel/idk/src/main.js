import Vue from 'vue'
import App from './App.vue'
import router from '@/router'
// import Navbar from '@/components/Navbar.vue'

// Vue.component('app-navbar', Navbar);

Vue.config.productionTip = false

new Vue({
    router,
    render: h => h(App),
}).$mount('#app')