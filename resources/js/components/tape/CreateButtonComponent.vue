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
            var store = this.$store;
            var url = '/api/tape/' + this.id;
            axios.get(url)
            .then(function(res){
              store.commit('changeMovieId', res.data.id);
              store.commit('changeSize', res.data.size);
              console.log(store.state.tape.movie_id);
              console.log(store.state.tape.size);
            })
            .catch(function(err){
              console.log(err);
            });
          }
        }
    }
</script>
