<?php
namespace App\Helpers\Rentals;

class ForKidCostCalculation implements IRentalCostCalculation
{
	function calculateCost($days)
	{
		if($days > 3)
			return 0.5;
		return 1;
	}
}