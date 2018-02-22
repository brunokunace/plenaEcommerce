<?php

use App\Common\Router\Router;
use App\Http\Controllers\ClientController;


Router::web('/client', ClientController::class, 'admin.client');