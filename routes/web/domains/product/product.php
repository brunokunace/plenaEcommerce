<?php

use App\Common\Router\Router;
use App\Http\Controllers\ProductController;


Router::web('/product', ProductController::class, 'admin.product');