<template>
  <div>
      <!-- <app-navbar :title="listPage"></app-navbar> -->
      <app-navbar :title="listPage">
          <template #content>
              <p>this is Content of List</p>
          </template>
          <template #footer>
              <p>this is footer of List</p>
          </template>
      </app-navbar>
  </div>
</template>

<script>
import NavBar from '@/components/NavBar'
export default {
    components:{
        "app-navbar" : NavBar
    },
    data(){
        return{
            listPage:"List"
        }
    }
}
</script>

<style>

</style>