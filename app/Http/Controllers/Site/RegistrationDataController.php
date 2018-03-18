<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class RegistrationDataController extends Controller
{
    public function __invoke()
    {
        return view('site.registrationdata.index');
    }
}
