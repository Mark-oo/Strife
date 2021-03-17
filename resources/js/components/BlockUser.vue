<template>
  <button :disabled='btnProperty' class="btn btn-sm btn-outline-primary " type="submit" v-on:click="block">{{btnText}}</button>
</template>

<script>
export default {
  props:['user-id'],
  data(){
    return{
      btnText:"Block",
      btnProperty:false,
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
         app.btnProperty=true;
         app.btnText="Blocked";
      }
    }
}
</script>
