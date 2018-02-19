<?php

use App\Common\Router\Router;

Router::get('/', function () {
    return view('site.home.index');
});

Router::prefix('admin')->group(__DIR__ . '/category/category.php');

Auth::routes();
