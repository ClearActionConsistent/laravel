@extends('layouts.app')

@section('content')

<h1>Rentals</h1>

<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">User</th>
			<th scope="col">Movie</th>
			<th scope="col">Part</th>
			<th scope="col">Starting Date</th>
			<th scope="col">Return Date</th>
			<th scope="col">Amount</th>
			<th scope="col">Cost</th>
			<th scope="col"></th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($rentals as $rt)
		<tr>
			<th scope="row">{{$rt->id}}</th>
			<td>print out user name here</td>
			<td>{{$rt->tape->movie->name}}</td>
			<td>{{$rt->tape->movie->part}}</td>
			<td>{{$rt->renting_date}}</td>
			<td>{{$rt->return_date}}</td>
			<td>{{$rt->amount}}</td>
			<td>{{$rt->cost}}</td>
			<td>
				<form action="{{route('rental.destroy',[$rt->id])}}" method="POST">
				 @method('DELETE')
				 @csrf
				 <button type="submit">Delete</button>               
				</form>
			</td>
			<td><a href="{{route('rental.edit', ['rental'=>$rt->id])}}">Edit</a></td>
		</tr>
		@endforeach
		<tr>
			<td colspan="5">{{ $rentals->links() }}</td>
		</tr>
	</tbody>
</table>
@endsection