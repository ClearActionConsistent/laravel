<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tape;
use App\Rental;

class RentalsController extends Controller
{
	public function index()
	{
		$rentals = Rental::paginate(5);
		return view('rental.index', compact('rentals'));
	}
	
    public function create(Tape $tape)
	{
		return view('rental.create', compact('tape'));
	}
	
	public function store()
	{
		$data = request()->validate([
			'tape_id' => 'required',
			'return_date' => ['nullable','date'],
			'amount' => 'nullable'
		]);
		
		$rental = new Rental();
		$data = request()->only($rental->getFillable());
		$rental->fill($data);
		$rental->calcCost();
		$rental->save();
		//$rental->create();
		//dd($rental);
		//Rental::create($rental);
		
		return redirect()->route('rental.index');
	}
}
