<?php

namespace App\Http\Controllers\Site;

use App\Domains\Product\Model\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = Category::whereHas('products', function($q) {
            $q->where('category_featured', true);
        })->get();
        return view('site.home.index', compact('categories'));
    }
}
