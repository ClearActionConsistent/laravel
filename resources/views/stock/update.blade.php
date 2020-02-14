@extends('layouts.app')

@section('content')

<form method="post" action="{{route('stock.update',['stock'=>$stock->id])}}">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label for="tape_id">Tape:</label>
		@include('partials.tapes.dropdown', ['selected'=>$stock->tape_id])
		@if($errors->has('tape_id'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('tape_id')}}</strong>
			</span>
		@endif
	</div>
	<div class="form-group">
		<label for="quantity">Quantity:</label>
		<input type="text" class="form-control" id="quanity" name="quantity" value="{{$stock->quantity}}">
		@if($errors->has('quanity'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('quanity')}}</strong>
			</span>
		@endif
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection