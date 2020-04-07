<template>
  <div id="app">
    <app-navbar/>
    <div class="container">
      <router-view :key="$route.fullPath"></router-view>
    </div>
  </div>
</template>

<script>
import NavBar from './components/NavBar.vue'

export default {
  name: 'App',
  components: {
    "app-navbar" : NavBar
  }
}
</script>

