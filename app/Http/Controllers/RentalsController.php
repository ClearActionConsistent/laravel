<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;

class RentalsController extends Controller
{
    public function create(Rental $rental)
	{
		return "erwrwer";
		return view('rental.create', compact('rental'));
	}
}
