<template>
  <div class="container">
      <label  for="search">Find chat</label>
        <div class="row">
          <input class="form-control" placeholder="Search by username" type="text" v-model="input">
          <button class="form-control btn btn-primary btn-sm" v-on:click="find" type="button" name="button">Search</button>
          <div id="res"></div>
        </div>
</div>
</template>

<script>
    export default {
        data() {
            return{
              input: "",
            }
        },
        methods:{
          find:function(){
            var app=this;
            axios.post('/chats/find',{search :app.input}
            ).then(function(res){
              // console.log(res.data)
              if(!Object.entries(res.data).length)
              {
                // alert(JSON.stringify(res.data)===undefined);
                document.getElementById('res').innerHTML = `
                  <div class="card">
                    <div class="card-body">
                      <h5>Chat not found!</h5>
                    </div>
                  </div>`;
              }
              else{
                console.log('else')
                  // alert(JSON.stringify(res));
                  document.getElementById('res').innerHTML = `
                  <div class="card">
                    <div class="card-body">
                      <a href="http://127.0.0.1:8000/chats/${JSON.stringify(res.data.id, null, 2)}">Found it!!</a>
                    </div>
                  </div>`;
              }
               });

          }
        }
    }
</script>
