<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tape;
use App\Helpers\Rentals\RentalCostCalculationFactory;
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
		$factory = new RentalCostCalculationFactory();
		$rentalCostCalculation = $factory->getRentalCostCalculation($this->tape->movie->price_code_id);
		$rentingDays = $this->calcRentingDays();
		$this->cost = $rentalCostCalculation->calculateCost($rentingDays) * $this->tape->movie->basic_cost * $rentingDays;
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









