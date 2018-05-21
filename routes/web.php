<?php

Route::get('/','PagesController@root')->name('root');
Route::get('search/products','PagesController@search');
Route::get('search/brands','PagesController@searchBrands');
Route::get('letter/brands/{letter}', 'PagesController@searchBrandsByFirstLetter')->name('letter.brands');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::resource('users','UsersController',['only' => ['show','update','edit']]);


Route::resource('categories','CategoriesController',['only' => ['show']]);
Route::get('categories/{category}/show_brands', 'CategoriesController@showBrands')->name('categories.show_brands');

Route::resource('brands', 'BrandsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('products', 'ProductsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

Route::resource('news', 'NewsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::post('upload_image','NewsController@uploadImage')->name('news.upload_image');
Route::resource('newscategories','NewsCategoriesController',['only' => 'show']);

Route::resource('recruits', 'RecruitsController', ['only' => ['index', 'show','create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('questions', 'QuestionsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);



