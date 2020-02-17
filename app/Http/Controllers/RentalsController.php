<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tape;
use App\Rental;
use App\Stock;

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
		
		$pdo = DB::connection()->getPdo();
		$pdo ->exec('SET TRANSACTION ISOLATION LEVEL READ COMMITTED');
		DB::beginTransaction();
		try
		{
			$stock = Stock::find($rental->tape_id);
			$qty = $stock->quantity;
			if($qty > $rental->amount)
			{
				$rental->save();
				$stock->quantity -= $rental->amount;
				$stock->save();
				DB::commit();
			}
			else
			{
				DB::rollBack();
			}
		}
		catch(Exception $ex)
		{
			DB::rollBack();
		}
		return redirect()->route('rental.index');
	}
}
