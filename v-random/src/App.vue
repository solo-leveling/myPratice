<template>
  <div id="app">
    <navbar/>
    <router-view></router-view>
  </div>
</template>

<script>
import navbar from './components/Navbar.vue'

export default {
  name: 'App',
  components: {
    navbar
  }
}
</script>

<style>

</style>
