<?php

use App\Common\Router\Router;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\PersonalDataController;

Router::get('/', HomeController::class)->name('site.home.index');
Router::get('/product/{id}', ProductController::class)->name('site.product.index');


Router::prefix('')->group(__DIR__ . '/web/domains/cart/cart.php');

Router::middleware('auth:user')->group(function (){

    Router::get('/admin', function () {
        return view('admin.home.index');
    })->name('admin.home.index');

    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/category.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/product.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/product/manufacturer.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/client/client.php');
    Router::prefix('admin')->group(__DIR__ . '/web/domains/supplier/supplier.php');
});

Router::middleware('auth:clients')->group(function (){

    Router::prefix('panel')->group(__DIR__ . '/web/domains/panel/personaldata.php');
    Router::prefix('panel')->group(__DIR__ . '/web/domains/panel/registrationdata.php');
});

Router::prefix('auth')->group(__DIR__ . '/web/auth/auth.php');
Router::prefix('authclient')->group(__DIR__ . '/web/auth/authclient.php');




