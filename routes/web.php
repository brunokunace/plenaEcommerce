<?php

use App\Common\Router\Router;
use App\Http\Controllers\Site\HomeController;

Router::get('/', HomeController::class)->name('site.home.index');


Router::middleware('auth')->group(function (){

    Router::get('/admin', function () {
        return view('admin.home.index');
    })->name('admin.home.index');

    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/category.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/product.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/manufacturer.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/client/client.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/supplier/supplier.php');
});

Router::prefix('auth')->group(__DIR__ . '/web/auth/auth.php');



