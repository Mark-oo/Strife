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
          message:'pisa'
        }
      },
      methods:{
        search:function(){
         var app=this
         axios
         .get('/search')
         .then(function(res){
           if(app.handle==''){
             console.log("prazno polje");
           }
           else if(JSON.stringify(res.data).includes(app.hanlde)){
             console.log("nema ti taj peder "+app.handle);
           }else{
             console.log("Evo ga taj tvoj peder "+app.handle);
           }
         })
         .catch(err =>alert("jed govna sit"))
         }
        }
      }
</script>
