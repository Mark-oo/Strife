<template>
  <div class="container">
      <label  for="search">Find chat</label>
        <div class="row">
          <input class="form-control" placeholder="Search by username" type="text" v-model="handle">
          <span v-bind:text="message">{{message}}</span>
          <button class="form-control btn btn-primary btn-sm" v-on:click="find" type="button" name="button">Search</button>
        </div>
</div>
</template>

<script>
    export default {
        data() {
            return{
              pisa: "pisa"
            }
        },
        methods:{
          find:function(){console.log()}

        }
    }
</script>
