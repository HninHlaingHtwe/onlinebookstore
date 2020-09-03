<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

use App\Book;
use App\Subcategory;
use App\Category;



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
        Schema::defaultStringLength(191);

        $books=Book::all();
        $categories = Category::all();
        $subcategories=Subcategory::all();
        $randomBooks=Book::all();

        View::share('data',[$books,$categories,$subcategories,$randomBooks]);
    }
}
