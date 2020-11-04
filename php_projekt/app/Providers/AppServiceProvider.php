<?php

namespace App\Providers;

use App\MainCat;
use App\Product;
use App\Subcat;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        $maincat = MainCat::with('subcat')->get();
        $recommended = Product::with(['image','maincat','subcat'])->inRandomOrder()->limit(9)->get();
        $banner = Product::with(['image','maincat','subcat','maker']) ->inRandomOrder()->first();
//        echo $maincat;
        View::share('maincat', $maincat);
        View::share('recommended', $recommended);
        View::share('bannerProd',$banner);


    }
}
