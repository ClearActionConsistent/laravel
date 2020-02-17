<?php
namespace App\QueryFilters;
use Closure;
class PriceCodeId
{
	public function handle($request, Closure $next)
	{
		if(!request()->has('search_price_code_id'))
		{
			return $next($request);
		}
		$builder = $next($request);
		return $builder->where('price_code_id', '=', request()->search_price_code_id);
	}
}