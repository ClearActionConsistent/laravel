<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tape;

class TapesController extends Controller
{
    public function index()
	{
		$tapes = Tape::paginate(5);
		return view('tape.index', compact('tapes'));
	}
	
	public function create()
	{
		return view('tape.create');
	}
	
	public function store()
	{
		$data = request()->validate([
			'movie_id' => 'required',
			'size' => 'nullable'
		]);
		
		Tape::create($data);
		return redirect()->route('tape.index');
	}
	
	public function show(Tape $tape)
	{
		return view('tape.show', compact('tape'));
	}
	
	public function edit(Tape $tape)
	{
		return view('tape.update', compact('tape'));
	}
	
	public function update(Tape $tape)
	{
		$data = request()->validate([
			'movie_id' => 'required',
			'size' => 'nullable'
		]);
		
		$tape->update($data);
		return redirect()->route('tape.index');
	}
	
	public function destroy(Tape $tape)
	{
		$tape->delete();
		return redirect()->route('tape.index');
	}
	
	
}
