<?php

use App\Common\Router\Router;
use App\Http\Controllers\Api\CategoryController;

Router::get('/category/all', [
    'uses' => 'App\Http\Controllers\Api\CategoryController@all'
])->name('api.category.all');
Router::web('/category', CategoryController::class, 'api.category');

