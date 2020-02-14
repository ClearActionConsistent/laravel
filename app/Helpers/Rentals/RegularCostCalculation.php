<?php
namespace App\Helpers\Rentals;

class RegularCostCalculation implements IRentalCostCalculation
{
	function calculateCost($days)
	{
		if($days > 3)
			return 1;
		return 1.5;
	}
}