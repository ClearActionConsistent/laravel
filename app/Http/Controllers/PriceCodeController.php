<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PriceCodeController extends Controller
{
	public function index()
	{
		$priceCodes = App\PriceCode::all();
		return view('pricecode.home', compact('priceCodes'));
	}
	
	public function create()
	{
		return view('pricecode.create');
	}
	
	public function store2(Request $request)
	{
		print_r($request->all());
		//handle submitted data, do validation and persist data
		//return view();
	}
	
	public function store()
	{
		$data = request()->validate([
			'name' => 'required',
			'code' => ['required']
		]);
		
		return App\PriceCode::create($data);
		//return view();
	}
	
	public function show()
	{
		//take advanced of model binding to initiate model object
		return view();
	}
	
	public function edit()
	{
		//take advanced of model binding to initiate model object
		//pass the model to the view to edit
		return view();
	}
	
	public function update()
	{
		//handle submitted data, do validation and persist data
		return view();
	}
	
	public function destroy()
	{
		//delete data from db
		return view();
	}
}
