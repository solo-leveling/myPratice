<template>
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card">  
            <div class="card-header">
              <div class="h5">Create Post</div>
            </div>
            <div class="card-body">
              <form action="" @submit.prevent="toCreateForm">
                <div class="form-group">
                   <label for="">Title</label>
                   <input type="text" name="" id="" class="form-control" v-model="postData.title">
                </div>
                <div class="form-group">
                   <label for="">Body</label>
                   <textarea name="" id="" cols="30" rows="10" class="form-control" v-model="postData.body"></textarea>
                </div>
                <input type="submit" value="Post" class="btn btn-primary block float-right">
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
import store from '@/store'
export default {
    methods:{
      toCreateForm(){
        store.dispatch('createForm',this.postData)
        this.$router.push({name:'list'})
      }
    },
    data(){
      return{
        postData:{
          title:null,
          body:null
        }
      }
    }
}
</script>

<style>

</style>