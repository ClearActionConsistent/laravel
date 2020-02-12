<form method="post" action="{{route('pricecode.update',['pricecode'=>$pricecode->id])}}">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" name="name" id="name" value="{{$pricecode->name}}">
		@if($errors->has('name'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('name')}}</strong>
			</span>
		@endif
	</div>
	<div class="form-group">
		<label for="code">Code:</label>
		<input type="number" class="form-control" id="code" name="code" value="{{$pricecode->code}}">
		@if($errors->has('code'))
			<span class="invalid-feedback" role="alert">
				<strong>{{$errors->first('code')}}</strong>
			</span>
		@endif
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

