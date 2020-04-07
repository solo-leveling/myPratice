<template>
  <div>
    <div class="row">
      <div class="col-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <form action="" @submit="submitPost">
              <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Body</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <input type="submit" value="Post" class="form-control btn btn-primary block">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  computed:{
    submitPost(){
      store.dispatch('toPost',this.editableForm);
    }
  },
  data(){
    return{
      editableForm(){
        
      }
    }
  }
}
</script>

<style>

</style>