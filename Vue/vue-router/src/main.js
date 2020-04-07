import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import createProduct from './views/CreateProduct.vue'
import productList from './views/ProductList.vue'
import productDetail from './views/ProductDetail.vue'

Vue.config.productionTip = false

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        { path: "/", name: "List", component: productList },
        { path: "/create", name: "Create", component: createProduct },
        { path: "/detail", name: "Detail", component: productDetail },
    ]
});



new Vue({
    router,
    render: h => h(App),
}).$mount('#app')