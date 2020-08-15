<?php

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', 'HomeController@about')->name('About');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('Admin');
    Route::get('/addNews', 'IndexController@addNews')->name('addNews');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
    Route::get('/', 'NewsController@index')->name('index');
    Route::get('/one/{id}', 'NewsController@show')->name('show');
    Route::group([
        'as' => 'category.'
    ], function () {
        Route::get('/categories', 'NewsCategoryController@index')->name('index');
        Route::get('/category/{name}', 'NewsCategoryController@show')->name('show');
    });
});

Auth::routes();

Route::get('/logout', 'LoginController@logout')->name('logout');

//Route::get('/home', 'HomeController@index')->name('index');
