<select id="{{$field ?? 'price_code_id'}}" name="{{$field ?? 'price_code_id'}}">
	@foreach($priceCodes as $priceCode)
		@if(isset($selected) && ($priceCode->id == $selected))
			<option value="{{$priceCode->id}}" selected>
				{{$priceCode->name}}
			</option>
		@else
			<option value="{{$priceCode->id}}">
				{{$priceCode->name}}
			</option>
		@endif
		
	@endforeach
</select>