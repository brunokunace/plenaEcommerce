<?php

$this->post('login', 'App\Http\Controllers\Auth\ClientController@login')->name('login.client');
$this->get('auth/{provider}','App\Http\Controllers\Auth\ClientController@redirectToProvider');
$this->get('auth/{provider}/callback','App\Http\Controllers\Auth\ClientController@handleProviderCallback');

$this->post('register', 'App\Http\Controllers\Auth\ClientController@register')->name('register.client');