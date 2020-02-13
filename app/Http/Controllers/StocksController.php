<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StocksController extends Controller
{
    public function index()
	{
		$stocks = Stock::paginate(5);
		return view('stock.index', compact('stocks'));
	}
	
	public function create()
	{
		return view('stock.create');
	}
	
	public function store()
	{
		$data = request()->validate([
			'tape_id' => 'required',
			'quantity' => 'required'
		]);
		
		Stock::create($data);
		return redirect()->route('stock.index');
	}
	
	public function show(Stock $stock)
	{
		return view('stock.show', compact('stock'));
	}
	
	public function edit(Stock $stock)
	{
		return view('stock.update', compact('stock'));
	}
	
	public function update(Stock $stock)
	{
		$data = request()->validate([
			'tape_id' => 'required',
			'quantity' => 'required'
		]);
		
		$stock->update($data);
		return redirect()->route('stock.index');
	}
	
	public function destroy(Stock $stock)
	{
		$stock->delete();
		return redirect()->route('stock.index');
	}
}
