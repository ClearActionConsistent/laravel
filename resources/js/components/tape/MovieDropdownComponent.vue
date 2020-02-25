<template>
  <div>
    <div v-if="loading" class="loading">loading...</div>
    <div v-if="error" class="error">{{error}}</div>
    <select v-if="listMovies">
        <option 
          v-for="item in listMovies" 
          v-bind:key="item.id" 
          :selected="selectedId == item.id"
          v-bind:value="item.id">
          {{item.name}} {{item.part}}
        </option>
    </select>
  </div>
</template>

<script>
    export default {
        name: 'movie-dropdown-component',
        props: ["selectedId"],
        data: function(){
          return {
            listMovies: null,
            loading: false,
            error: null
          }
        },
        mounted(){
          this.fetchData();
        },
        methods: {
          fetchData(){
            axios.get('/api/movie')
            .then((res)=>{
              this.listMovies = res.data;
            })
            .catch((err)=>{
              console.log(err);
            });
          }
        }
    }
</script>
