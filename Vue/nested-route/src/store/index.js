import Vue from 'vue'
import Vuex from 'vuex'
import posts from './modules/posts'

Vue.use(Vuex)

const store = Vuex.Store({
    modules: {
        posts
    }
})

export default store;