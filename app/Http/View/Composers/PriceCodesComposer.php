<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\PriceCode;

class PriceCodesComposer
{
	public function compose(View $view)
	{
		$view->with('priceCodes', PriceCode::orderBy('id')->get());
	}
}