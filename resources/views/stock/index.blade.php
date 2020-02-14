@extends('layouts.app')

@section('content')

<h1>Stocks</h1>

<a href="{{route('stock.create')}}">Create</a>
<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Tape</th>
			<th scope="col">Quantity</th>
			<th scope="col"></th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@foreach($stocks as $stock)
		<tr>
			<th scope="row">{{$stock->id}}</th>
			<td>{{$stock->tape->movie->name}} {{$stock->tape->movie->part}}</td>
			<td>{{$stock->quantity}}</td>
			<td>
				<form action="{{route('stock.destroy',[$stock->id])}}" method="POST">
				 @method('DELETE')
				 @csrf
				 <button type="submit">Delete</button>               
				</form>
			</td>
			<td><a href="{{route('stock.edit', ['stock'=>$stock->id])}}">Edit</a></td>
		</tr>
		@endforeach
		<tr>
			<td colspan="5">{{ $stocks->links() }}</td>
		</tr>
	</tbody>
</table>
@endsection