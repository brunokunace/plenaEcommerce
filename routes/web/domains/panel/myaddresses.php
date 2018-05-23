<?php

use App\Common\Router\Router;
use App\Http\Controllers\DeliveryAddressController;


Router::web('/myaddresses', DeliveryAddressController::class, 'site.myaddresses');