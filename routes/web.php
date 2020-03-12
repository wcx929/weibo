<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('support', 'StaticPagesController@support')->name('support');

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');



Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

//邮件激活
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

//重置密码
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


//创建微博
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);


//关注的人
Route::get('/users/{user}/followings','UsersController@followings')->name('users.followings');
//我的粉丝
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');

//关注
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
//取消关注
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');

//
Route::get('loveword', 'SentenceController@show')->name('loveword');
Route::post('getloveword', 'SentenceController@words');
Route::get('pic', 'PicController@show')->name('pic');
Route::get('senlist', 'SentenceController@sentenceList')->name('senlist');
//浮生记列表
Route::get('fsj', 'FsjController@show')->name('fsj');


Route::get('excel/export','ExcelController@export');