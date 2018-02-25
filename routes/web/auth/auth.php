<?php

$this->get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'App\Http\Controllers\Auth\LoginController@login');
$this->post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'App\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');