<template>
<button v-bind:disabled="btnProperty" class="btn btn-sm btn-outline-secondary" v-on:click="send" type="submit">{{btnText}}</button>
</template>

<script>
    export default {
      props:['user-one','user-two'],
      data(){
         return{
           btnProperty:false,
           btnStyle:something,
           btnText:"Send Request",
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
           app.btnProperty=true;
           app.btnText="Sent";
           //TODO: ovo za btnText ne radi kak0 valja na rifresh vraca staro mora drugacije
         }
       }
    }
</script>
