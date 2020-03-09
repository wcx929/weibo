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
});
