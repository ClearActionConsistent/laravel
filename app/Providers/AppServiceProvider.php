<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\PriceCode;
use App\Http\View\Composers\PriceCodesComposer;
use App\Http\View\Composers\MoviesComposer;
use App\Http\View\Composers\TapesComposer;
use Gate;

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
		/*
		View::composer(['movie.create', 'movie.update'], function($view){
			$view->with('priceCodes', PriceCode::orderBy('id')->get()
			);
		});
		*/
		//case 3: specify views using wildcard
		/*
		View::composer(['movie.*'], function($view){
			$view->with('priceCodes', PriceCode::orderBy('id')->get();
			);
		});
		*/
		//case 4: create a seperated class just for handling shared data
		View::composer(['partials.pricecodes.*'], PriceCodesComposer::class);
		View::composer(['partials.movies.*'], MoviesComposer::class);
		View::composer(['partials.tapes.*'], TapesComposer::class);
		
		//$this->registerPolicies();
		$this->registerMoviePolicies();
    }
	
	public function registerMoviePolicies()
	{
		Gate::define('create-movie', function($user){
			return $user->hasAccess(['create-movie']);
		});
	}
}
