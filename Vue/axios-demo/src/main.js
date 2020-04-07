import Vue from 'vue'
import App from './App.vue'
// import PulseLoader from 'vue-spinner/src/PulseLoader.vue'
import beat from 'vue-spinner/src/BeatLoader.vue'
Vue.config.productionTip = false
Vue.component('app-spinner', beat)
new Vue({
    render: h => h(App),
}).$mount('#app')