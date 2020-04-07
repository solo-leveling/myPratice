<template>
   <div class="card">
      <div class="card-body">
          <p>ID::{{id}}</p>
          <p>Name::{{name}}</p>
          <p>Price::{{price}}</p>
      </div>
      <div class="card-footer">
          <button class="btn btn-sm btn-primary" @click="onShow">Show</button>
          <button class="btn btn-sm btn-danger float-right" @click="onDelete">Delete</button>
      </div>
  </div>
</template>

<script>
import store from '@/store'
export default {
    props:['id','name','price'],
    methods:{
        onDelete(){
            store.dispatch('toDelete',this.id);
        },
        onShow(){
            this.$router.push({name:'Detail',params:{id:this.id}})
        }
    },
}
</script>

<style>

</style>