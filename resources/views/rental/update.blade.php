@extends('layouts.app')

@section('content')

<form method="post" action="{{route('rental.update',['rental'=>$rental->id])}}">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label for="name">Tape: {{$rental->tape->movie->name}} {{$rental->tape->movie->part}}</label>
		<input type="hidden" id="tape_id" name="tape_id" value="{{$rental->tape->id}}"/>
	  </div>
	  <div class="form-group">
		<label for="amount">Amount: </label>
		<input type="text" id="amount" name="amount" value="{{$rental->amount}}"/>
	  </div>
	  <div class="form-group">
		<label for="pwd">Return Date:</label>
		<input type="text" class="form-control" id="return_date" name="return_date" value="{{$rental->return_date}}">
		@if($errors->has('return_date'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('return_date')}}</strong>
			</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="status">Status: </label>
		<select class="form-control" name="status" id="status">
			<option value="0" @if($rental->status == 0)) {{'selected'}} @endif>New</option>
			<option value="1" @if($rental->status == 1)) {{'selected'}} @endif>Returned</option>
		</select>
	  </div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
