<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Movie;

class MoviesComposer
{
	public function compose(View $view)
	{
		$view->with('movies', Movie::orderBy('id')->get());
	}
}