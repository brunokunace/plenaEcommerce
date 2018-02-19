<?php

use App\Common\Router\Router;


Router::web('/category', CategoryController::class, 'admin.category');