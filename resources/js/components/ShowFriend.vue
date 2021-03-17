<template>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Handle</th><th>Name</th><th></th><th></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="friend in JSON.parse(friends)">
        <td>{{friend.handle}}</td>
        <td>{{friend.name}}</td>
        <td>
          <button type="button" class="btn btn-sm btn-outline-primary" name="button"><a v-bind:href="url+friend.handle">View</a></button>
          <button class="btn btn-sm btn-outline-primary" type="submit" v-on:click="del(friend.id)" name="button">Delete</button></td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  props:['friends'],
  data(){
    return{
      url:"http://127.0.0.1:8000/users/show/"
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
