@extends('layouts.app')

@section('content')

<h1>Create Rental</h1>
<div class="container">
	<form class="form-inline" method="post" action="{{route('rental.store')}}">
		@csrf
	  <div class="form-group">
		<label for="name">Tape: {{$tape->movie->name}} {{$tape->movie->part}}</label>
		<input type="hidden" id="tape_id" name="tape_id" value="{{$tape->id}}"/>
	  </div>
	  <div class="form-group">
		<label for="amount">Amount: </label>
		<input type="text" id="amount" name="amount"/>
	  </div>
	  <div class="form-group">
		<label for="pwd">Return Date:</label>
		<input type="text" class="form-control" id="return_date" name="return_date">
		@if($errors->has('return_date'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('return_date')}}</strong>
			</span>
		@endif
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection