<?php

use App\Common\Router\Router;


Router::get('/', function () {
    return view('site.home.index');
})->name('site.home.index');


Router::middleware('auth')->group(function (){

    Router::get('/admin', function () {
        return view('admin.home.index');
    })->name('admin.home.index');

    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/category.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/product.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/client/client.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/manufacturer/manufacturer.php');
});

Router::prefix('auth')->group(__DIR__ . '/web/auth/auth.php');



