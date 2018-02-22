<?php

use App\Common\Router\Router;

Router::get('/', function () {
    return view('site.home.index');
});

Router::prefix('admin')->group(__DIR__ . '/domains/product/category.php');
Router::prefix('admin')->group(__DIR__ . '/domains/client/client.php');
Router::prefix('admin')->group(__DIR__ . '/domains/manufacturer/manufacturer.php');

//Auth::routes();
