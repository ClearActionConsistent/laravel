<template>
   <button v-on:click="editTape">Edit</button>
</template>

<script>
    export default {
        name: 'create-button-component',
        props:['id'],
        data:{
          id: ''
        },
        methods:{
          editTape(){
            var url = '/api/movie/' + this.id;
            axios.get(url)
            .then(function(res){
              console.log(res);
            })
            .catch(function(err){
              console.log(err);
            });
          }
        }
    }
</script>
