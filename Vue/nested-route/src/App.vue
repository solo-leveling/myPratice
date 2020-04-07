<template>
  <div id="app">
    <app-navbar></app-navbar>
    <router-view></router-view>
  </div>
</template>

<script>
import navBar from '@/components/NavBar'

export default {
  name: 'App',
  components:{
    "app-navbar" : navBar
  }
}
</script>

