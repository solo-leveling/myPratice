<template>
  <div>
    <navBar/>
    <router-view></router-view>
  </div>
</template>

<script>
import navBar from '@/components/NavBar'
export default {
    components:{
        navBar
    }
}
</script>

<style>

</style>