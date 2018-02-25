<?php

use App\Common\Router\Router;
use App\Http\Controllers\SupplierController;


Router::web('/supplier', SupplierController::class, 'admin.supplier');