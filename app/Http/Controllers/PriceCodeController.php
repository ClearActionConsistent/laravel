<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceCodeController extends Controller
{
    //
	public function index()
	{
		return view('pricecode.home');
	}
}
