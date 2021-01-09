<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->prefix('v1')->group(function () {
        Route::get('/sentence','SentenceController@index')->name('sentences.index');
        Route::get('/sentenceList','SentenceController@getList')->name('sentences.getList');
        Route::get('/pictype','SentenceController@getPicType')->name('sentences.getPicType');
        Route::get('/piclist','SentenceController@getPicList')->name('sentences.getPicList');
        Route::get('/supportslist','SentenceController@getSupportsList')->name('sentences.getSupportsList');
        Route::get('/fsjlist','SentenceController@getFsjList')->name('sentences.getFsjList');
        Route::get('/wallList','WallController@getWallList')->name('wall.getWallList');
});

/*小程序*/
Route::get('wxappLogin','api\LoginController@login')->name('wxappLogin.login');
Route::get('wxappGetUserInfo','api\LoginController@getUserInfo')->name('wxapp.wxappGetUserInfo');

Route::any('/getloveword', 'SentenceController@getloveword');
