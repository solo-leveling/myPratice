<template>
  <div id="app">
    <button @click="onClick" id="btn">Load</button>
    <template v-if="loading">
    <table>
      <thead>
        <tr><th>UserID</th><th>ID</th><th>title</th><th>body</th></tr>
      </thead>
      <tbody v-for="item in items" :key="item.id">
        <td>{{item.userId}}</td><td>{{item.id}}</td><td>{{item.title}}</td><td>{{item.body}}</td>
      </tbody>
    </table>
    </template>
    <template v-else>
      <app-spinner/>
    </template>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'App',
  data(){
    return{
      items:null,
      loading:true
    }
  },
  methods:{
    onClick(){
      this.loading = false;
      axios.get('https://jsonplaceholder.typicode.com/posts').then((res)=>{
        setTimeout(()=>{
          this.items = res.data;
          this.loading = true;
        },5000)       
      })
  },
  
}
}
</script>

