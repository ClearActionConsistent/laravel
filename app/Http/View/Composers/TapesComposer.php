<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Tape;

class TapesComposer
{
	public function compose(View $view)
	{
		$view->with('stocks', Tape::orderBy('id')->get());
	}
}