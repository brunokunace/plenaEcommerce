<?php

namespace App\Http\Controllers\Site;

use App\Domains\Product\Model\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = Category::whereHas('products', function($q) {
            $q->with('manufacturer');
            $q->where('featured', true);
            $q->where('active', true);
        })
            ->with('products')

            ->where('category_featured', true)
            ->where('category_active', true)
            ->get();
//            ->toSql();
//            dd($categories);


        return view('site.home.index', compact('categories'));
    }
}
