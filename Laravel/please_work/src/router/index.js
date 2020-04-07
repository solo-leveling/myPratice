import Vue from 'vue'
import VueRouter from 'vue-router'
import List from '@/views/posts/List'
import Create from '@/views/posts/Create'
import Edit from '@/views/posts/Edit'
import PostContainer from '@/containers/PostContainer'
import DefaultContainer from '@/containers/DefaultContainer'
Vue.use(VueRouter)

const routes = [{
    path: "/",
    component: DefaultContainer,
    children: [{
        path: 'posts',
        component: PostContainer,
        children: [{ path: '', name: 'list', component: List },
            { path: 'create', name: 'create', component: Create },
            { path: ':id/edit', name: 'edit', component: Edit },
        ]
    }]
}]

const router = new VueRouter({
    routes,

})

export default router;