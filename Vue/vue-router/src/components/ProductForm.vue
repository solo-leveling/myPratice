<template>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" v-model="id">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" v-model="name">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" v-model="price">
            </div>
            <button class="btn btn-primary" @click="toSubmit">Add</button>           
            <!-- <router-link :to="{name:'List'}" class="btn btn-primary" @click="toSubmit">Add</router-link> -->
        </div>
    </div>
</template>



<script>
import store from '@/store'
export default {
    methods:{
        toSubmit(){
          var product= { 
            id:this.id,
            name:this.name,
            price:this.price
            }
        store.dispatch('toStore',product);
        }
    },
    data(){
        return{
            id:null,
            name:null,
            price:null
        }
    }
}
</script>

<style>

</style>