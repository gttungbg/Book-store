<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth/admin'], function() {
    Route::get('login', 'Backend\Auth\LoginController@index')->name('login.index');
    Route::post('post/login', 'Backend\Auth\LoginController@login')->name('login.post');
    Route::get('logout', 'Backend\Auth\LoginController@logout')->name('logout');
});
