<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('categories', 'ShopController@categories');