@extends('layouts.app')

@section('content')

<form method="post" action="{{route('movie.update',['movie'=>$movie->id])}}">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" name="name" id="name" value="{{$movie->name}}">
		@if($errors->has('name'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('name')}}</strong>
			</span>
		@endif
	</div>
	<div class="form-group">
		<label for="code">Part:</label>
		<input type="number" class="form-control" id="part" name="part" value="{{$movie->part}}">
		@if($errors->has('part'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('part')}}</strong>
			</span>
		@endif
	</div>
	
	<div class="form-group">
		<label for="price_code_id">Price Code:</label>
		@include('partials.pricecodes.dropdown',['selected' => $movie->price_code_id])
		@if($errors->has('price_code_id'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('price_code_id')}}</strong>
			</span>
		@endif
	  </div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
