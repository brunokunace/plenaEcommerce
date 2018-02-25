<?php

use App\Common\Router\Router;
use App\Http\Controllers\Api\ManufacturerController;

Router::get('/manufacturer/all', [
    'uses' => 'App\Http\Controllers\Api\ManufacturerController@all'
])->name('api.manufacturer.all');
Router::web('/manufacturer', ManufacturerController::class, 'api.manufacturer');

