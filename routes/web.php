<?php

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', 'HomeController@about')->name('About');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('Admin');
    Route::get('/test1', 'IndexController@test1')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
    Route::get('/', 'NewsController@index')->name('News');
    Route::get('/{id}', 'NewsController@show')->name('NewsOne');
});

Route::group([
    'as' => 'NewsCategories.'
], function () {
    Route::get('/NewsCategories', 'NewsCategoryController@index')->name('NewsCategories');
    Route::get('NewsCategory/{name}', 'NewsCategoryController@show')->name('NewsCategory');
});
