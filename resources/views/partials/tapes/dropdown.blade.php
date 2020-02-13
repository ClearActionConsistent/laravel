<select id="{{$field ?? 'tape_id'}}" name="{{$field ?? 'tape_id'}}">
	@foreach($stocks as $stock)
		<option value="{{$stock->id}}" @if(isset($selected) && ($stock->id == $selected)) {{'selected'}} @endif>
			{{$stock->movie->name}} {{$stock->movie->part}}
		</option>
	@endforeach
</select>