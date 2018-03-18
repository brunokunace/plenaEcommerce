<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class PersonalDataController extends Controller
{
    public function __invoke()
    {
        return view('site.personaldata.index');
    }
}
