<?php

use App\Common\Router\Router;

Router::prefix('')->group(__DIR__ . '/api/domains/product/category.php');
Router::prefix('')->group(__DIR__ . '/api/domains/product/manufacturer.php');
