import Vue from 'vue'
import VueRouter from 'vue-router'
import DefaultContainer from '@/containers/DefaultContainer'
import PostContainer from '@/containers/PostContainer'
import Create from '@/views/posts/Create'
import List from '@/views/posts/List'
import Edit from '@/views/posts/Edit'
import Login from '@/views/Login'
import Register from '@/views/Register'

Vue.use(VueRouter)

const routes = [{
        path: '/',
        component: DefaultContainer,
        children: [{
            path: 'posts',
            component: PostContainer,
            children: [
                { path: 'create', component: Create },
                { path: '', component: List },
                { path: ':id/edit', component: Edit },
            ]
        }, ]
    },

    { path: '/login', component: Login },
    { path: '/register', component: Register }
]

const router = new VueRouter({
    routes
})

export default router;