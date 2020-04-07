import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Home from '@/views/Home'
import List from '@/views/List'
Vue.config.productionTip = false
Vue.use(VueRouter)
const router = new VueRouter({
    routes: [
        { path: '/', component: Home },
        { path: '/list', component: List }
    ]
})
new Vue({
    router,
    render: h => h(App),
}).$mount('#app')