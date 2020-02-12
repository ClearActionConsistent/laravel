<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PriceCodeController extends Controller
{
	public function index()
	{
		$priceCodes = App\PriceCode::all();
		return view('pricecode.index', compact('priceCodes'));
	}
	
	public function create()
	{
		return view('pricecode.create');
	}
	
	public function store()
	{
		$data = request()->validate([
			'name' => 'required',
			'code' => ['required']
		]);
		
		App\PriceCode::create($data);
		return redirect()->route('pricecode.index');
	}
	
	public function show(App\PriceCode $priceCode)
	{
		return view('pricecode.show', compact('priceCode'));
	}
	
	public function edit(App\PriceCode $priceCode)
	{
		return view('pricecode.update', compact('priceCode'));
	}
	
	public function update(App\PriceCode $priceCode)
	{
		$data = request()->validate([
			'name' => 'required',
			'code' => ['required']
		]);
		
		$priceCode->update($data);
		return redirect()->route('pricecode.index');
	}
	
	public function destroy(App\PriceCode $priceCode)
	{
		$priceCode->delete();
		return redirect()->route('pricecode.index');
	}
}
