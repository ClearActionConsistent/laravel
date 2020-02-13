<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MoviesController extends Controller
{
    public function index()
	{
		$movies = App\Movie::all();
		return view('movie.index', compact('movies'));
	}
	
	public function create()
	{
		//$priceCode = App\PriceCode::orderBy('id')->get();
		return view('movie.create');
	}
	
	public function store()
	{
		$data = request()->validate([
			'name' => 'required',
			'part' => ['required'],
			'price_code_id' => 'required'
		]);
		
		App\Movie::create($data);
		return redirect()->route('movie.index');
	}
	
	public function show(App\Movie $movie)
	{
		return view('movie.show', compact('movie'));
	}
	
	public function edit(App\Movie $movie)
	{
		return view('movie.update', compact('movie'));
	}
	
	public function update(App\Movie $movie)
	{
		$data = request()->validate([
			'name' => 'required',
			'part' => ['required'],
			'price_code_id' => 'required'
		]);
		
		$movie->update($data);
		return redirect()->route('movie.index');
	}
	
	public function destroy(App\Movie $movie)
	{
		$movie->delete();
		return redirect()->route('movie.index');
	}
}
