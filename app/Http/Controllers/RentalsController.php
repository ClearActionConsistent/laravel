<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tape;

class RentalsController extends Controller
{
    public function create(Tape $tape)
	{
		return view('rental.create', compact('tape'));
	}
}
