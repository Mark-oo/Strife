<template>
  <button class="btn btn-sm btn-outline-primary " type="submit" v-on:click="add" name="button">Add</button>
</template>

<script>
export default {
  props:['friend-id'],
  data(){
    return{
      id_friend:this.friendId,
      burek:"pisa"
    }
  },
    methods:{
      add: function(){
        var app=this
        axios.
         post('/friends/add',{
           friend_id: app.id_friend
         })
      }
    }
}
</script>
