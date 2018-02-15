<?php

Route::get('/', function () {
    return view('site.home.home');
});

Auth::routes();
