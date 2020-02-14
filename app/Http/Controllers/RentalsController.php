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
	
	public function store(Tape $tape)
	{
		$data = request()->validate([
			'tape_id' => 'required',
			'return_date' => ['nullable'],
			'amount' => 'nullable'
		]);
		Rental::create($data);
		
		return redirect()->route('rental.index');
	}
}
