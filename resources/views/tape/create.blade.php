@extends('layouts.app')

@section('content')

<h1>Create Tape</h1>
<div class="container">
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
@endsection