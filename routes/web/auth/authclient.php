<?php

$this->post('login', 'App\Http\Controllers\Auth\ClientController@login')->name('login.client');

// Registration Routes...
$this->get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register.client');
$this->post('register', 'App\Http\Controllers\Auth\RegisterController@register');