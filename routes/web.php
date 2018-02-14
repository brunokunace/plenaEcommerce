<?php

Route::get('/', function () {
    return view('site.home.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
