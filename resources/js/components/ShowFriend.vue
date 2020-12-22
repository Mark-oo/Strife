<template>
    <tr>
      <td></td>
      <td v-bind:text="handle">{{handle}}</td>
      <td v-bind:text="name">{{name}}</td>
      <td><button class="btn btn-sm btn-outline-primary" type="submit" v-on:click="del" name="button">Delete</button></td>
    </tr>
</template>

<script>
export default {
  props:['friend-id','friend-handle','friend-name'],
  data(){
    return{
      handle:this.friendHandle,
      name:this.friendName,
      id_friend:this.friendId,
      burek:"pisa"
    }
  },
    methods:{
      del: function(){
        var app=this
        axios.
         post('/friends/d',{
           friend_id: app.id_friend
         })
      }
    }
}
</script>
