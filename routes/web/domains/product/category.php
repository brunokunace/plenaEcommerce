<?php

use App\Common\Router\Router;
use App\Http\Controllers\CategoryController;


Router::web('/category', CategoryController::class, 'admin.category');