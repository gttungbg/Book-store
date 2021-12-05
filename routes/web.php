<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
        echo "123";
    }
);

//be
Route::group(['prefix' => 'auth/admin'], function () {
        Route::get('login', 'Backend\Auth\LoginController@index')->name('login.index');
        Route::post('post/login', 'Backend\Auth\LoginController@login')->name('login.post');
        Route::get('logout', 'Backend\Auth\LoginController@logout')->name('logout');
    }
);

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group( ['prefix'=> 'admin','middleware' => ['CheckLogin']],function () {

        Route::get('/', 'Backend\AdminController@index')->name('dashboard');

        Route::group(['prefix' => 'category'], function () {
                Route::get('/', 'Backend\CategoryController@index')->name('category.index');
                Route::get('create', 'Backend\CategoryController@create')->name('category.create');
                Route::post('store', 'Backend\CategoryController@store')->name('category.store');
                Route::get('edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
                Route::post('update/{id}', 'Backend\CategoryController@update')->name('category.update');
                Route::get('delete/{id}', 'Backend\CategoryController@delete')->name('category.delete');
            }
        );

        Route::group(['prefix' => 'publisher'],function () {
                Route::get('/', 'Backend\PublisherController@index')->name('publisher.index');
                Route::get('create', 'Backend\PublisherController@create')->name('publisher.create');
                Route::post('store', 'Backend\PublisherController@store')->name('publisher.store');
                Route::get('edit/{id}', 'Backend\PublisherController@edit')->name('publisher.edit');
                Route::post('update/{id}', 'Backend\PublisherController@update')->name('publisher.update');
                Route::get('delete/{id}', 'Backend\PublisherController@delete')->name('publisher.delete');
            }
        );

        Route::group(['prefix' => 'user'], function () {
                Route::get('/', 'Backend\UserController@index')->name('user.index');
                Route::get('create', 'Backend\UserController@create')->name('user.create');
                Route::post('store', 'Backend\UserController@store')->name('user.store');
                Route::get('edit/{id}', 'Backend\UserController@edit')->name('user.edit');
                Route::post('update/{id}', 'Backend\UserController@update')->name('user.update');
                Route::get('delete/{id}', 'Backend\UserController@delete')->name('user.delete');
            }
        );

        Route::group(['prefix' => 'profile'], function () {
                Route::get('{id}', 'Backend\Auth\ProfileController@index')->name('profile.index');
                Route::post('update/{id}', 'Backend\Auth\ProfileController@update')->name('profile.update');
            }
        );

        Route::group(['prefix' => 'author'], function () {
                Route::get('', 'Backend\AuthorController@index')->name('author.index');
                Route::get('create', 'Backend\AuthorController@create')->name('author.create');
                Route::post('store', 'Backend\AuthorController@store')->name('author.store');
                Route::get('edit/{id}', 'Backend\AuthorController@edit')->name('author.edit');
                Route::post('update/{id}', 'Backend\AuthorController@update')->name('author.update');
                Route::get('destroy/{id}', 'Backend\AuthorController@destroy')->name('author.destroy');
            }
        );

        Route::group(['prefix' => 'book'], function () {
                Route::get('', 'Backend\BookController@index')->name('book.index');
                Route::get('create', 'Backend\BookController@create')->name('book.create');
                Route::post('store', 'Backend\BookController@store')->name('book.store');
                Route::get('edit/{id}', 'Backend\BookController@edit')->name('book.edit');
                Route::post('update/{id}', 'Backend\BookController@update')->name('book.update');
                Route::get('delete/{id}', 'Backend\BookController@delete')->name('book.delete');
                Route::post('search', 'Backend\BookController@index')->name('search.book');
            }
        );

        Route::group(['prefix' => 'comment'], function () {
                Route::get('', 'Backend\CommentController@index')->name('comment.index');
            }
        );

        Route::group(['prefix' => 'borrow'], function () {
            Route::get('', 'Backend\BorrowController@index')->name('borrow.index');
            Route::get('status/{id}', 'Backend\BorrowController@updateStatus')->name('borrow.status');
            Route::get('show/{id}', 'Backend\BorrowController@show')->name('borrow.show');
        }
    );
    }
);

//fe

Route::get('login', 'Frontend\AuthController@login')->name('login');
Route::post('login', 'Frontend\AuthController@submitLogin')->name('auth.login-submit');
Route::get('logout', 'Frontend\AuthController@logout')->name('auth.logout');
Route::get('register', 'Frontend\AuthController@register')->name('auth.register');
Route::post('register', 'Frontend\AuthController@submitRegister')->name('auth.register-submit');

Route::get('/', 'Frontend\HomeController@home')->name('home');
Route::get('/book-details/{id}', 'Frontend\HomeController@bookDetail')->name('book_details');
Route::post('post/comment/{idBook}', 'Frontend\CommentController@postComment')
     ->name('comment.post')
     ->middleware('auth');
Route::get('list-books', 'Frontend\HomeController@allBooks')->name('book.show');
//add to cart
Route::get('book/add-to-cart/{id}', 'Frontend\BookController@addToCart')->name('cart.add');
Route::get('book/show-cart', 'Frontend\BookController@showCart')->name('cart.index');
Route::get('book/update-cart', 'Frontend\BookController@updateCart')->name('cart.update');

//checkout
Route::group(['prefix' => 'checkout', 'middleware' => ['auth']], function () {
    Route::get('', 'Frontend\CheckoutController@index')->name('checkout.index');
    Route::post('store', 'Frontend\CheckoutController@store')->name('checkout.store');
});

Route::get('profile/{id}', 'Frontend\UserController@index')->name('profile.index');





