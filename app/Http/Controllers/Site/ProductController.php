<?php

namespace App\Http\Controllers\Site;

use App\Domains\Product\Model\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __invoke($id)
    {
        $product = Product::findOrFail($id);
        $product->category;

        return view('site.product.index', compact('product'));

    }
}
