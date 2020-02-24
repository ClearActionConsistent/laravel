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
            .then(function(res){
              store.commit('changeTape', res.data);
              console.log(store.state.tape.movieId);
              console.log(store.state.tape.size);
              $("#myModal").modal();

            })
            .catch(function(err){
              console.log(err);
            });
          }
        }
    }
</script>
