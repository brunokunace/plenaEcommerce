<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Domains\Product\Repository\Product;

class CartController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $qty = 1;
        $item = $product->read($request->id);
        Cart::add($item->id,$item->name,$qty,$item->sell_price);
    }

    public function listItems()
    {
        return [
            'count' => Cart::count(),
            'total' => Cart::total(),
            'items' => Cart::content()
        ];
    }

    public function delete(Request $request)
    {
        Cart::remove($request->item);
    }

    public function update(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
    }

    public function details()
    {
        return view('site.cart.index');
    }
}
