<?php

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', 'HomeController@about')->name('About');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('admin');
    Route::get('/test1', 'IndexController@test2')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
    //CRUD NEWS
    Route::get('/news', 'NewsController@news')->name('news');
    Route::match(['get', 'post'], '/create', 'NewsController@create')->name('create');
    Route::get('/edit/{news}', 'NewsController@edit')->name('edit');
    Route::post('/update/{news}', 'NewsController@update')->name('update');
    Route::get('/destroy/{news}', 'NewsController@destroy')->name('destroy');
    //CRUD CATEGORIES
    Route::get('/categories', 'CategoriesController@categories')->name('categories');
    Route::match(['get', 'post'], '/categories/create', 'CategoriesController@create')->name('catCreate');
    Route::get('/categories/edit/{category}', 'CategoriesController@edit')->name('catEdit');
    Route::post('/categories/update/{category}', 'CategoriesController@update')->name('catUpdate');
    Route::get('/categories/destroy/{category}', 'CategoriesController@destroy')->name('catDestroy');
});

Route::group([
    'prefix' => 'news',
    'as' => 'news.'
], function () {
    Route::get('/', 'NewsController@index')->name('index');
    Route::get('/one/{news}', 'NewsController@show')->name('show');
    Route::group([
        'as' => 'category.'
    ], function () {
        Route::get('/categories', 'NewsCategoryController@index')->name('index');
        Route::get('/category/{name}', 'NewsCategoryController@show')->name('show');
    });
});

Auth::routes();

