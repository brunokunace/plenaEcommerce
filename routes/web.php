<?php

use App\Common\Router\Router;

Router::get('/', function () {
    return view('site.home.index');
});

Router::prefix('admin')->group(__DIR__ . '/web/domains/product/category.php');
Router::prefix('admin')->group(__DIR__ . '/web/domains/product/product.php');
Router::prefix('admin')->group(__DIR__ . '/web/domains/client/client.php');
Router::prefix('admin')->group(__DIR__ . '/web/domains/manufacturer/manufacturer.php');

//Auth::routes();
