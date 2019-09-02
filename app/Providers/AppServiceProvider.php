<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service;
use App\User;
use App\Photo;
use App\Brand;
use App\Product;
use App\Variant;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	$rentalAd = Photo::get();
        view()->share('rentalAd', $rentalAd );
		
		$brandList = Brand::all();
		view()->share('brandList', $brandList );
		
		$productList = Product::all();
		view()->share('productList', $productList);
		
		$variantList = Variant::all();
		view()->share('variantList', $variantList);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
