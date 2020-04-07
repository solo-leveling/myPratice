import Vue from 'vue'
import Vuex from 'vuex'
import items from './modules/items.js'
Vue.use(Vuex)

const store = Vuex.Store({
    modules: {
        items
    }
})

export default store;