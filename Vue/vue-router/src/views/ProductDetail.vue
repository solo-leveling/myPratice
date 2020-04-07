<template>
  <div>
      <h1>smth</h1>
      <div v-if="item">
      <p>ID : {{item.id}}</p>
      <p>Name : {{item.name}}</p>
      <p>Price : {{item.price}}</p>
      </div>
      <div v-else>
          <p>Loading.....</p>
      </div>
  </div>
</template>

<script>
import store from '@/store'
export default {
    created(){
        store.dispatch('toShow',this.$route.params.id);
    },
    computed:{
        item(){
            return store.getters.product;
        }
    }
}
</script>

<style>

</style>