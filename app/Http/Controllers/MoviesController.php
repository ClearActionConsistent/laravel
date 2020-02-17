<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\QueryFilters\Movies\FilterByName;
use App\QueryFilters\Movies\FilterByPriceCode;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function index()
	{
		//$movies = Movie::query()->where('name', 'like', '%game%')->get();
		
		
		
		$movies = Movie::query();
		if(request()->has('search_price_code_id'))
		{
			$movies = $movies->where('price_code_id', '=', request()->search_price_code_id);
		}
		
		if(request()->has('search_name'))
		{
			$movies = $movies->where('name', 'like', '%'.request()->search_name.'%');
		}
		
		$movies = $movies->paginate(5);
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
	
	public function show(Movie $movie)
	{
		return view('movie.show', compact('movie'));
	}
	
	public function edit(Movie $movie)
	{
		return view('movie.update', compact('movie'));
	}
	
	public function update(Movie $movie)
	{
		$data = request()->validate([
			'name' => 'required',
			'part' => ['required'],
			'price_code_id' => 'required'
		]);
		
		$movie->update($data);
		return redirect()->route('movie.index');
	}
	
	public function destroy(Movie $movie)
	{
		$movie->delete();
		return redirect()->route('movie.index');
	}
}
