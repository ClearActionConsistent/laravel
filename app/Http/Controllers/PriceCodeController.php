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
	
	public function show()
	{
		//take advanced of model binding to initiate model object
		return view();
	}
	
	public function edit(App\PriceCode $pricecode)
	{
		return view('pricecode.update', compact('pricecode'));
	}
	
	public function update(App\PriceCode $pricecode)
	{
		$data = request()->validate([
			'name' => 'required',
			'code' => ['required']
		]);
		
		$pricecode->update($data);
		return redirect()->route('pricecode.index');
	}
	
	public function destroy(App\PriceCode $pricecode)
	{
		$pricecode->delete();
		return redirect()->route('pricecode.index');
	}
}
