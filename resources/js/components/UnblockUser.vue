<template>
  <button  class="btn btn-sm btn-outline-primary " type="submit" v-on:click="block" name="button">Unblock</button>
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
      block: function(){
        var app=this
        axios.
         post('/friends/block',{
           user_id: app.id_user
         })
      }
    }
}
</script>
