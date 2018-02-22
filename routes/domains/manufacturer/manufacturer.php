<?php

use App\Common\Router\Router;
use App\Http\Controllers\ManufacturerController;


Router::web('/manufacturer', ManufacturerController::class, 'admin.manufacturer');