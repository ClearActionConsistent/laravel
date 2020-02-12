<h1>Movies</h1>

<a href="{{route('movie.create')}}">Create</a>
<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Part</th>
			<th scope="col"></th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($movies as $mv)
		<tr>
			<th scope="row">{{$mv->id}}</th>
			<td>{{$mv->name}}</td>
			<td>{{$mv->part}}</td>
			<td>
				<form action="{{route('movie.destroy',[$mv->id])}}" method="POST">
				 @method('DELETE')
				 @csrf
				 <button type="submit">Delete</button>               
				</form>
			</td>
			<td><a href="{{route('movie.edit', ['movie'=>$mv->id])}}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>