<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tape;

class Rental extends Model
{
	private $IRentalCostCalculation;
    protected $guarded = [];
	protected $fillable = ['tape_id', 'return_date', 'amount', 'cost'];
	
	public function tape()
	{
		return $this->belongsTo(Tape::class);
	}
	
	public function calcCost()
	{
		$factory = new RentalCostCalculationFactory($this);
		$rentalCostCalculation = $factory->getRentalCostCalculation();
		$rentingDays = $this->calcRentingDays();
		$this->cost = $rentalCostCalculation->calculateCost($rentingDays) * $this->tape->movie->basic_cost;
	}
	
	private function calcRentingDays()
	{
		if(!is_null($this->return_date))
		{
			$now = time(); 
			$returnDate = strtotime($this->return_date);
			$datediff = $returnDate - $now;
			return round($datediff / (60 * 60 * 24));
		}
		return 0;
	}
}

class RentalCostCalculationFactory
{
	private $IRentalCostCalculation;
	function __construct(Rental $rental)
	{
		if($rental->tape->movie->price_code_id == 1)
			$this->IRentalCostCalculation = new RegularCostCalculation();
		if($rental->tape->movie->price_code_id == 3)
			$this->IRentalCostCalculation = new NewReleaseCostCalculation();
		if($rental->tape->movie->price_code_id == 4)
			$this->IRentalCostCalculation = ForKidCostCalculation();
	}
	
	function getRentalCostCalculation()
	{
		return $this->IRentalCostCalculation;
	}
}

interface IRentalCostCalculation
{
	public function calculateCost($days);
}

class RegularCostCalculation implements IRentalCostCalculation
{
	function calculateCost($days)
	{
		if($days > 3)
			return 1;
		return 1.5;
	}
}

class NewReleaseCostCalculation implements IRentalCostCalculation
{
	function calculateCost($days)
	{
		if($days > 3)
			return 2.5;
		return 3;
	}
}

class ForKidCostCalculation implements IRentalCostCalculation
{
	function calculateCost($days)
	{
		if($days > 3)
			return 0.5;
		return 1;
	}
}