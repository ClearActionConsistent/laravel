<h1>Price Codes</h1>
<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Code</th>
			<th scope="col"></th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($priceCodes as $pc)
		<tr>
			<th scope="row">{{$pc->id}}</th>
			<td>{{$pc->name}}</td>
			<td>{{$pc->code}}</td>
			<td>
				<form action="{{route('pricecode.destroy',[$pc->id])}}" method="POST">
				 @method('DELETE')
				 @csrf
				 <button type="submit">Delete</button>               
				</form>
			</td>
			<td><a href="{{route('pricecode.edit', ['pricecode'=>$pc->id])}}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>