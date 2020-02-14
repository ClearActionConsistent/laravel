<?php
namespace App\Helpers\Rentals;

class RentalCostCalculationFactory
{
	function getRentalCostCalculation($priceCode)
	{
		if($priceCode == 1)
			return new RegularCostCalculation();
		if($priceCode == 3)
			return new NewReleaseCostCalculation();
		if($priceCode == 4)
			return ForKidCostCalculation();
		
	}
}