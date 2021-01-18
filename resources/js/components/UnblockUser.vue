<template>
  <button  class="btn btn-sm btn-outline-primary " type="submit" v-on:click="unblock" name="button">Unblock</button>
</template>

<script>
export default {
  props:['user-id'],
  data(){
    return{
      id_user:this.userId,
      burek:"pisa"
    }
  },
    methods:{
      unblock: function(){
        var app=this
        axios.
         post('/friends/unblock',{
           user_id: app.id_user
         })
      }
    }
}
</script>
