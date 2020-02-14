<?php
namespace App\Helpers\Rentals;

class NewReleaseCostCalculation implements IRentalCostCalculation
{
	function calculateCost($days)
	{
		if($days > 3)
			return 2.5;
		return 3;
	}
}