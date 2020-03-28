<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('sentence', 'SentenceController@index');
    $router->get('sentence/create', 'SentenceController@create');
    $router->post('sentence', 'SentenceController@store');
    $router->get('sentence/{id}/edit', 'SentenceController@edit');
	$router->put('sentence/{id}', 'SentenceController@update');
    
	$router->get('pic', 'PicController@index');
    $router->get('pic/create', 'PicController@create');
    $router->post('pic', 'PicController@store');
    $router->get('pic/{id}/edit', 'PicController@edit');
    $router->put('pic/{id}', 'PicController@update');
    $router->get('pic/add', 'PicController@add');

    $router->get('fsj', 'FsjController@index');
    $router->get('fsj/{id}/edit', 'FsjController@edit');
    $router->get('fsj/create', 'FsjController@create');
    $router->post('fsj', 'FsjController@store');
    $router->put('fsj/{id}', 'FsjController@update');
    //捐助
    $router->get('supports', 'SupportsController@index');
    $router->get('supports/create', 'SupportsController@create');
    $router->post('supports', 'SupportsController@store');
    $router->get('supports/{id}/edit', 'SupportsController@edit');
    $router->put('supports/{id}', 'SupportsController@update');
});
