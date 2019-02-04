<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('cart', 'PagesController@cart');
Route::get('shop', 'PagesController@shop');

#Shop

Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@item');
});