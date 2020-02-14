@extends('layouts.app')

@section('content')

<h1>Create Stock</h1>
<div class="container">
	<form class="form-inline" method="post" action="{{route('stock.store')}}">
		@csrf
	  <div class="form-group">
		<label for="tape_id">Tape:</label>
		@include('partials.tapes.dropdown')
		@if($errors->has('tape_id'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('type_id')}}</strong>
			</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="quantity">Quanity:</label>
		<input type="text" class="form-control" id="quantity" name="quantity">
		@if($errors->has('quantity'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('quantity')}}</strong>
			</span>
		@endif
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection