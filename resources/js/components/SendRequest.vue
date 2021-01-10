<template>
<button class="btn btn-md btn-outline-primary" v-on:click="send" type="submit">Send Request</button>
</template>

<script>
    export default {
      props:['user-one','user-two'],
       data(){
         return{
           firstUser:this.userOne,
           secondUser:this.userTwo,
         }
       },
       methods:{
         send:function(){
           var app=this
           axios
           .post('/friends/send',{
             userOne:app.firstUser,
             userTwo:app.secondUser
           })
         }
       }
    }
</script>
