<?php
namespace App\Helpers\Rentals;

interface IRentalCostCalculation
{
	public function calculateCost($days);
}