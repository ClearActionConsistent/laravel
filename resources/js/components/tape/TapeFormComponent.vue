<template>
    <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-left">
		<h4 class="modal-title">Create Tape</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form class="form-inline" method="post">
				
			  <div class="form-group">
				<label for="movie_id">Movie:</label>
				<movie-dropdown-component v-bind:selectedId="selectedMovieId"/>
				
			  </div>
			  <div class="form-group">
				<label for="size">Size:</label>
				<input type="text" class="form-control" id="size" name="size" v-model="size"/>
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</template>

<script>
  import MovieDropdownComponent from './MovieDropdownComponent';
  export default {
      name: 'tape-form-component',
      components: {
        MovieDropdownComponent
      },
      computed: {
        size: {
          get(){
            return this.$store.state.tape.size;
          },
          set(value){
            this.$store.commit('changeSize', value);
          }
        },
        selectedMovieId: {
          get(){
            return this.$store.state.tape.movieId;
          },
          set(value){
            this.$store.commit('changeMovieId', value);
          }
        }
      }
  }
</script>
