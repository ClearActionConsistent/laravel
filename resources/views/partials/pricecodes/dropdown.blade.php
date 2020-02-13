<select id="{{$field ?? 'price_code_id'}}" name="{{$field ?? 'price_code_id'}}>
	@foreach($priceCodes as $priceCode)
		<option value="{{$priceCode->id}}">
			{{$priceCode->name}}
		</option>
	@endforeach
</select>