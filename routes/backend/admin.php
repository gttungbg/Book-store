<?php

//
//use Illuminate\Support\Facades\Route;
//
//Route::group(['prefix' => 'admin', 'middleware' => ['CheckLogin']], function() {
//
//    Route::get('/', 'Backend\AdminController@index')->name('dashboard');
//
//    Route::group(['prefix' => 'category'], function() {
//        Route::get('/', 'Backend\CategoryController@index')->name('category.index');
//        Route::get('create', 'Backend\CategoryController@create')->name('category.create');
//        Route::post('store', 'Backend\CategoryController@store')->name('category.store');
//        Route::get('edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
//        Route::post('update/{id}', 'Backend\CategoryController@update')->name('category.update');
//        Route::get('delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
//    });
//
//    Route::group(['prefix' => 'publisher'], function() {
//        Route::get('/', 'Backend\PublisherController@index')->name('publisher.index');
//        Route::get('create', 'Backend\PublisherController@create')->name('publisher.create');
//        Route::post('store', 'Backend\PublisherController@store')->name('publisher.store');
//        Route::get('edit/{id}', 'Backend\PublisherController@edit')->name('publisher.edit');
//        Route::post('update/{id}', 'Backend\PublisherController@update')->name('publisher.update');
//        Route::get('delete/{id}', 'Backend\PublisherController@delete')->name('publisher.delete');
//    });
//
//    Route::group(['prefix' => 'user'], function() {
//        Route::get('/', 'Backend\UserController@index')->name('user.index');
//        Route::get('create', 'Backend\UserController@create')->name('user.create');
//        Route::post('store', 'Backend\UserController@store')->name('user.store');
//        Route::get('edit/{id}', 'Backend\UserController@edit')->name('user.edit');
//        Route::post('update/{id}', 'Backend\UserController@update')->name('user.update');
//        Route::get('delete/{id}', 'Backend\UserController@delete')->name('user.delete');
//    });
//
//    Route::group(['prefix' => 'profile'], function() {
//        Route::get('{id}', 'Backend\Auth\ProfileController@index')->name('profile.index');
//        Route::post('update/{id}', 'Backend\Auth\ProfileController@update')->name('profile.update');
//    });
//
//    Route::group(['prefix' => 'author'], function() {
//        Route::get('', 'Backend\AuthorController@index')->name('author.index');
//        Route::get('create', 'Backend\AuthorController@create')->name('author.create');
//        Route::post('store', 'Backend\AuthorController@store')->name('author.store');
//        Route::get('edit/{id}', 'Backend\AuthorController@edit')->name('author.edit');
//        Route::post('update/{id}', 'Backend\AuthorController@update')->name('author.update');
//        Route::get('destroy/{id}', 'Backend\AuthorController@destroy')->name('author.destroy');
//    });
//
//    Route::group(['prefix' => 'book'], function() {
//        Route::get('', 'Backend\BookController@index')->name('book.index');
//        Route::get('create', 'Backend\BookController@create')->name('book.create');
//        Route::post('store', 'Backend\BookController@store')->name('book.store');
//        Route::get('edit/{id}', 'Backend\BookController@edit')->name('book.edit');
//        Route::post('update/{id}', 'Backend\BookController@update')->name('book.update');
//        Route::get('delete/{id}', 'Backend\BookController@delete')->name('book.delete');
//    });
//
//});
