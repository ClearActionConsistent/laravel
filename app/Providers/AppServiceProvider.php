<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\PriceCode;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		//case 1: this view will be generated on every time a page get created.
        //View::share('priceCodes', PriceCode::orderBy('id')->get());
		
		//case 2: specify views 
		View::composer(['movie.create', 'movie.update'], function($view){
			$view->with('priceCodes', PriceCode::orderBy('id')->get()
			);
		});
    }
}
