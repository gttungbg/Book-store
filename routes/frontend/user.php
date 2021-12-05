<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Frontend\HomeController@index')->name('home');
