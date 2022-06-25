<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Metal;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('catalogue', function ($view) {
            $view->with('categories', Category::orderByRaw('-name ASC')->get());
        });


        View::composer('layouts.layout-collection', function ($view) {
            $view->with('categories', Category::orderByRaw('-name ASC')->get());
            $view->with('collections', Collection::orderByRaw('-name ASC')->get());
            $view->with('metals', Metal::orderByRaw('-name ASC')->get());
        });


        View::composer('categories.all_collections', function ($view) {
            $view->with('products', Product::orderByRaw('-code ASC')->get());
        });

        View::composer('includes.product-slider', function ($view) {
            $view->with('featuredProducts', Product::where('featured', '=', 1)->orderByRaw('-code ASC')->get());
        });
    }
}
