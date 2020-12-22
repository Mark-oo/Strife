<template>
  <div class="container">
    <label  for="search">Search</label>
      <div class="row">
      <input class="form-control" placeholder="Search by username" type="text" v-model="handle">
      <span v-bind:text="message">{{message}}</span>
      <button class="form-control btn btn-primary btn-sm" v-on:click="search" type="button" name="button">Search</button>
      </div>

  </div>

</template>

<script>
    export default {
      data(){
        return{
          handle:'',
          message:''
        }
      },
      methods:{
        search:function(){
         var app=this;
         axios
         .get('/search')
         .then(function(res){
           if(app.handle==''){
              app.message ="prazno polje";

           }
           else if(JSON.stringify(res.data).includes(app.handle)){
             // console.log(JSON.stringify(res.data).includes(app.hanlde));
             // console.log(app.handle);
             app.message="Evo ga taj tvoj peder "+app.handle;
           }else{
             app.message="Nema taj tvoj peder "+app.handle;
              console.log(JSON.stringify(res.data).includes(app.handle));
           }
         })
         .catch(err =>app.message.alert("jed govna sit"))
         }
        }
      }
</script>
