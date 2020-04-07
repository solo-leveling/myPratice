import Vue from 'vue'
import VueRouter from 'vue-router'
import List from '@/views/posts/List'
Vue.use(VueRouter)

const routes = [
    { path: '/list', component: List }
]

const router = new VueRouter({
    routes,
    mode: history
})

export default router;