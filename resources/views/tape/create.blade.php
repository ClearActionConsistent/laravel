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
          <form class="form-inline" method="post" action="{{route('tape.store')}}">
				@csrf
			  <div class="form-group">
				<label for="movie_id">Movie:</label>
				@include('partials.movies.dropdown')
				@if($errors->has('movie_id'))
					<span class="invalid-feedback" role="alert">
						<strong>{{$errors->first('movie_id')}}</strong>
					</span>
				@endif
			  </div>
			  <div class="form-group">
				<label for="size">Size:</label>
				<input type="text" class="form-control" id="size" name="size">
				@if($errors->has('size'))
					<span class="invalid-feedback" role="alert">
						<strong>{{$errors->first('size')}}</strong>
					</span>
				@endif
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
