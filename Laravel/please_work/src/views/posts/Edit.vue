<template>
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card">  
            <div class="card-header">
              <div class="h5">Edit Post</div>
            </div>
            <div class="card-body">
              <form action="" @submit.prevent="toEditForm">
                <div class="form-group">
                   <label for="">Title</label>
                   <input type="text" name="" id="" class="form-control" v-model="postData.title" value="this.postData.title">
                </div>
                <div class="form-group">
                   <label for="">Body</label>
                   <textarea name="" id="" cols="30" rows="10" class="form-control" v-model="postData.body"></textarea>
                </div>
                <input type="submit" value="Update" class="btn btn-primary block float-right">
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
  computed:{
    postData(){
      var id = this.$route.params.id;
      var foundpost = store.getters.posts.find(e=>e.id==id);
      return foundpost;
    }
  },
  methods:{
    async toEditForm(){
      await store.dispatch('editForm',this.postData)
      this.$router.push({name:'list'})
    }
  }
}
</script>

<style>

</style>