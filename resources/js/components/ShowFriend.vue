<template>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th><th>Handle</th><th>name</th><th></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="friend in JSON.parse(friends)">
        <td>{{friend.handle}}</td>
        <td>{{friend.name}}</td>
        <td><button class="btn btn-sm btn-outline-primary" type="submit" v-on:click="del(friend.id)" name="button">Delete</button></td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  props:['friends'],
  data(){
    return{
    }
  },
    methods:{
      del: function(friend_id){
        // var app=this
        axios.
         post('/friends/d',{
           friend_id: friend_id
         })
      }
    }
}
</script>
