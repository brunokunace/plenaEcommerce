<?php

use App\Common\Router\Router;
use App\Http\Controllers\PersonalDataController;


Router::web('/personaldata', PersonalDataController::class, 'site.personaldata');