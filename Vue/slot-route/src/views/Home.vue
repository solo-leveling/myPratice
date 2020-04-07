<template>
  <div>
    <app-navbar :title="pageName">
    <template #content>
      <a href="https://www.google.com">Google</a>
    </template>
    </app-navbar>
  </div>
</template>

<script>
import Navbar from '@/components/NavBar'
export default {
  components:{
    "app-navbar" : Navbar
  },
  data(){
    return{
      pageName : "Home"
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

