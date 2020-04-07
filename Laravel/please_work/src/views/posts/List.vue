<template>
  <div class="container mt-5">
      <div class="card">
          <div class="card-header">
              <h1 class="h5">Posts</h1>
          </div>
          <div class="card-body">
                  <button class="btn btn-primary btn-sm float-right mb-3" @click="toCreate">Create</button>
              <table class="table">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Body</th>
                          <th>Categories</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr v-for="item in items" :key="item.id">
                          <td>{{item.id}}</td>
                          <td>{{item.title}}</td>
                          <td>{{item.body}}</td>
                          <td></td>
                          <td><button class="btn btn-warning btn-sm" @click="toEdit(item.id)">Edit</button><button class="btn btn-danger btn-sm ml-3" @click="toDelete(item.id)">Delete</button></td>
                          
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</template>

<script>
import store from '@/store'
export default {
    computed:{
        items(){
            return store.getters.posts
        }
    },
    created(){
        this.run()
    },
    methods:{
        run(){
            store.dispatch('showData');
        },
        toCreate(){
             this.$router.push({name:'create'});
        },
        toEdit(id){
            // this.$router.push('/posts/'+id+'/edit');
            // console.log(id);
            this.$router.push({name : 'edit',params:{id}});
        },
         toDelete(id){
             store.dispatch('deleteForm',id);
        }
    }
}
</script>

<style>

</style>