<?php

use App\Common\Router\Router;

Router::post('/cart', [
    'uses' => 'App\Http\Controllers\CartController@store'
])->name('cart.store');
Router::post('/cart/delete', [
    'uses' => 'App\Http\Controllers\CartController@delete'
])->name('cart.delete');
Router::get('/cart', [
    'uses' => 'App\Http\Controllers\CartController@listItems'
])->name('cart.list');

Router::get('/cart/details', [
    'uses' => 'App\Http\Controllers\CartController@details'
])->name('cart.details');

Router::put('/cart/update', [
    'uses' => 'App\Http\Controllers\CartController@update'
])->name('cart.update');