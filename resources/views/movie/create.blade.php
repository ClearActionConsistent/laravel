<h1>Create Movie</h1>
<div class="container">
	<form class="form-inline" method="post" action="{{route('movie.store')}}">
		@csrf
	  <div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" name="name" id="name">
		@if($errors->has('name'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('name')}}</strong>
			</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="pwd">Part:</label>
		<input type="number" class="form-control" id="part" name="part">
		@if($errors->has('part'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('part')}}</strong>
			</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="price_code_id">Price Code:</label>
		@include('partials.pricecodes.dropdown')
		@if($errors->has('price_code_id'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('price_code_id')}}</strong>
			</span>
		@endif
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>