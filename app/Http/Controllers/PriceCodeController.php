<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PriceCodeController extends Controller
{
	public function index()
	{
		//$companies = App\Company::first()->customers;
		//dd($companies[0]->name);
		$customer = App\Customer::first()->company;
		dd($customer->name);
		return view('pricecode.home');
	}
}
