@extends('layouts.app')

@section('content')

<h1>Tapes</h1>

<a href="{{route('tape.create')}}">Create</a>
<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Movie</th>
			<th scope="col">Size</th>
			<th scope="col"></th>
			<th scope="col"></th>
			<th scope="col"></>
		</tr>
	</thead>
	<tbody>
		@foreach($tapes as $tape)
		<tr>
			<th scope="row">{{$tape->id}}</th>
			<td>{{$tape->movie->name}} {{$tape->movie->part}}</td>
			<td>{{$tape->size}}</td>
			<td>
				<form action="{{route('tape.destroy',[$tape->id])}}" method="POST">
				 @method('DELETE')
				 @csrf
				 <button type="submit">Delete</button>               
				</form>
			</td>
			<td><a href="{{route('tape.edit', ['tape'=>$tape->id])}}">Edit</a></td>
			<td><a href="{{route('rental.create', ['tape'=>$tape->id])}}">Rent</a></td>
		</tr>
		@endforeach
		<tr>
			<td colspan="5">{{ $tapes->links() }}</td>
		</tr>
	</tbody>
</table>
@endsection