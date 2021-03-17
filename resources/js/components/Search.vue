<template>
  <div class="container">
    <label  for="search">Search</label>
      <div class="row">
      <input class="form-control" placeholder="Search by username" type="text" v-model="handle">
      <!-- <span v-bind:text="message">{{message}}</span> -->
      <div id="res"></div>
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
         if(app.handle==''){
           document.getElementById('res').innerHTML=`
           <div class="alert alert-danger" role="alert">
             Filed empty!!!
           </div>
           `;
         }else{
           axios
           .get('/search',{params:{user:app.handle}})
           .then(function(res){
             if(JSON.stringify(res.data).includes(app.handle)){
                console.log(res.data.handle);
               document.getElementById('res').innerHTML=`
               <div class="alert alert-danger" role="alert">
               Here is xhe/xshe <a href="http://127.0.0.1:8000/users/show/${res.data.handle}" class="alert-link">${JSON.stringify(res.data.handle)}</a>!!!
               </div>
               `;
               console.log(JSON.stringify(res.data.handle));
               // console.log(app.handle);
               // app.message="Evo ga taj tvoj peder "+app.handle;
             }else{
               // console.log(JSON.stringify(res.data));
               document.getElementById('res').innerHTML=`
               <div class="alert alert-danger" role="alert">
               No one with this username exits!!!
               </div>
               `;
               // app.message="Nema taj tvoj peder "+app.handle;
                // console.log(JSON.stringify(res.data));
             }
           })
           .catch(err =>app.message.alert("jed govna sit"))
           }
         }
        }
      }
</script>
