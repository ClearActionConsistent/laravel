<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\QueryFilters\PriceCodeId;
use App\QueryFilters\Name;
use Illuminate\Support\Facades\DB;
use Illuminate\Pipeline\Pipeline;


class MoviesController extends Controller
{
    public function index()
	{
		$movies = app(Pipeline::class)
		->send(Movie::query())
		->through([PriceCodeId::class, Name::class])
		->thenReturn()->paginate(5);
		
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
