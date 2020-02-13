<select id="{{$field ?? 'movie_id'}}" name="{{$field ?? 'movie_id'}}">
	@foreach($movies as $movie)
		<option value="{{$movie->id}}" @if(isset($selected) && ($movie->id == $selected)) {{'selected'}} @endif>
			{{$movie->name}} {{$movie->part}}
		</option>
	@endforeach
</select>