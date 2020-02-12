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
}
