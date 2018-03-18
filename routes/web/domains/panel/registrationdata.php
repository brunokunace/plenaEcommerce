<?php

use App\Common\Router\Router;
use App\Http\Controllers\RegistrationDataController;

Router::put('/registrationdata/password', 'App\Http\Controllers\RegistrationDataController@password')->name('site.registrationdata.password');
Router::web('/registrationdata', RegistrationDataController::class, 'site.registrationdata');
