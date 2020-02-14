@extends('layouts.app')

@section('content')

<form method="post" action="{{route('tape.update',['tape'=>$tape->id])}}">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label for="movie_id">Movie:</label>
		@include('partials.movies.dropdown', ['selected'=>$tape->movie_id])
		@if($errors->has('movie_id'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('movie_id')}}</strong>
			</span>
		@endif
	</div>
	<div class="form-group">
		<label for="size">Size:</label>
		<input type="text" class="form-control" id="size" name="size" value="{{$tape->size}}">
		@if($errors->has('size'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('size')}}</strong>
			</span>
		@endif
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection