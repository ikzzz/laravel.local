<?php

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', 'HomeController@about')->name('About');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware' => ['is_admin', 'auth']
], function () {
    //Route::get('/', 'IndexController@index')->name('admin');
    Route::get('/test1', 'IndexController@test2')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
    Route::match(['post', 'get'], '/profile', 'ProfileController@update')->name('updateProfile');
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
    //CRUD RESOURCE
    Route::get('/resource', 'ResourceController@resource')->name('resource');
    Route::match(['get', 'post'], '/resource/create', 'ResourceController@create')->name('resourceCreate');
    Route::get('/resource/edit/{resource}', 'ResourceController@edit')->name('resourceEdit');
    Route::post('/resource/update/{resource}', 'ResourceController@update')->name('resourceUpdate');
    Route::get('/resource/destroy/{resource}', 'ResourceController@destroy')->name('resourceDestroy');
    //CRUD USERS
    Route::get('/users', 'UsersController@users')->name('users');
    //Route::match(['get', 'post'], '/user/create', 'UsersController@create')->name('createUser');
    Route::match(['post', 'get'], '/profile', 'ProfileController@update')->name('updateProfile');
    Route::get('/users/setAdmin/{user}', 'UsersController@setAdmin')->name('setAdmin');
    Route::get('/users/unsetAdmin/{user}', 'UsersController@unsetAdmin')->name('unsetAdmin');
    Route::get('/users/destroy/{user}', 'UsersController@destroy')->name('UserDestroy');

    Route::get('/parser', 'ParserController@index')->name('parser');
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

Route::group([
    'prefix' => 'user',
    'namespace' => 'User',
    'as' => 'user.',
    'middleware' => 'auth'
], function () {

    Route::match(['post', 'get'], '/profile', 'ProfileController@update')->name('updateProfile');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//авторизации
Auth::routes();

Route::get('/auth/vk', 'LoginController@loginVK')->name('vklogin');
Route::get('/auth/vk/response', 'LoginController@responseVK')->name('vkResponse');
