<select id="{{$field ?? 'price_code_id'}}" name="{{$field ?? 'price_code_id'}}">
	@foreach($priceCodes as $priceCode)
		<option value="{{$priceCode->id}}" @if(isset($selected) && ($priceCode->id == $selected)) {{'selected'}} @endif>
				{{$priceCode->name}}
			</option>
	@endforeach
</select>