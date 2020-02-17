<?php
namespace App\QueryFilters;
use Closure;
class Name
{
	public function handle($request, Closure $next)
	{
		if(!request()->has('search_name'))
		{
			return $next($request);
		}
		$builder = $next($request);
		return $builder->where('name', 'like', '%'.request()->search_name.'%');
	}
}