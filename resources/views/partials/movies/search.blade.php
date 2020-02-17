<form class="form-inline" method="get" action="{{route('movie.index')}}">
	
  <div class="form-group">
	<label for="name">Name:</label>
	<input type="text" class="form-control" name="search_name" id="search_name">
  </div>
  <div class="form-group">
	<label for="search_price_code_id">Price Code:</label>
	@include('partials.pricecodes.dropdown', ['field' => 'search_price_code_id'])
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>