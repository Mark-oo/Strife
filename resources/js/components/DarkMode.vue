<template >
  <div class="row">
  <div class="col-md-4 offset-8">
    <div class="switch">
      <div class="switch-body">
        <div v-on:click="switc" class="toggle"></div>
      </div>
      <label class="govance">Become Cool</label>
      <input type="checkbox" name="switch">
    </div>
  </div>
</div>
</template>

<script>
export default {
  methods:{
    switch:function(){
      let pisa =document.querySelectorAll('.switch');
      for(var i=0;i<pisa.length;i++){
       pisa[0].addEventListener('click',function(event){
        if(this.classList.contains('active')){
          this.classList.remove('active');
          this.querySelector('input[type=checkbox]').checked=false;
        }else{
          this.classList.add('active')
          this.querySelector('input[type=checkbox]').checked=true;
         }
       })
      }

    }
  }
}
</script>

<style lang="css" scoped>
.switch{
  display:flex;
  flex-direction: row;
  align-items: center;
  margin:5px 0;
}
.govance{
  margin:4px 0;
}
.switch>.switch-body{
  background-color: #ddd;
  border: solid 1px grey;
  width: 48px;
  border-radius: 24px;
  box-shadow: inset 0 2px 4px 0 rgba(0,0,0,0.1);
}
.toggle{
  width: 24px;
  height: 24px;
  background-color: white;
  border-radius:  50%;
  box-shadow:  0 2px 4px 0 rgba(0,0,0,0.25);
  border: solid 1px gray;
  box-sizing: border-box;
}
.switch.active>.switch-body{
  background-color: #202225;
}
.switch.active>.switch-body .toggle{
  transform: translateX(100%);
}
.switch input[type=checkbox]{
  display:none;
}
</style>
