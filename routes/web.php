<?php

#Cms

Route::middleware(['cmsguard'])->group(function () {

    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoriesController');
    });
});

#Shop

Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories');
    Route::get('remove-item', 'ShopController@removeItem');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('cart', 'ShopController@cart');
    Route::get('checkout', 'ShopController@checkout');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@item');
});
#User

Route::prefix('user')->group(function () {
    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');
    Route::get('logout', 'UserController@logout');
});

#Pages

// Basic Pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

// Extra Pages -
Route::get('{url}', 'PagesController@content');