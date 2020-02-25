<template>
   <button v-on:click="editTape">Edit</button>
</template>

<script>
    export default {
        name: 'create-button-component',
        props:['id'],
        methods:{
          editTape(){
            var store = this.$store;
            var url = '/api/tape/' + this.id;
            axios.get(url)
            .then((res)=>{
              store.commit('changeTape', res.data);
              $("#myModal").modal();
            })
            .catch(function(err){
              console.log(err);
            });
          }
        }
    }
</script>
