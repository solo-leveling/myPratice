<template>
  <div class="row mt-3">
      <div class="col-md-3" v-for="item in items" :key="item.id">
          <app-product :id="item.id" :name="item.name" :price="item.price" />
      </div>
  </div>
</template>

<script>
import Product from '@/components/Product.vue'
import store from '@/store'
export default {
    components:{
        'app-product' : Product
    },
    computed:{
        items(){
            return store.getters.products;
        }
    }
}
</script>

<style>

</style>