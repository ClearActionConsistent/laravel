<h1>Create Price Code</h1>
<div class="container">
	<form class="form-inline" method="post" action="{{route('pricecode.store')}}">
		{{csrf_field()}}
		
		  <div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" id="name">
		  </div>
		  <div class="form-group">
			<label for="pwd">Code:</label>
			<input type="number" class="form-control" id="code" name="code">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>