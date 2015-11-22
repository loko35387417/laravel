<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'SiteController@index');
//Route::get('about', 'SiteController@about');
//
//Route::get('/article', 'ArticleController@index');

Route::group(['prefix' => '/'], function(){
    Route::get('about', ['as' => 'home', 'uses' => 'SiteController@about']);
    Route::get('/', ['as' => 'about', 'uses' => 'SiteController@index']);
});

Route::group(['prefix' => 'article', 'namespace' => 'article'], function(){
    Route::get('create', 'ArticleController@create');
    Route::get('destory/{id}', 'ArticleController@destroy');
    Route::get('edit/{id}', 'ArticleController@edit');
    Route::post('update/{id}', 'ArticleController@update');
    Route::post('/store', 'ArticleController@store');
    Route::get('/', ['as' => 'lists', 'uses' => 'ArticleController@index']);
    Route::get('/{id}', ['as' => 'single', 'uses' => 'ArticleController@show'])->where(['id' => '[0-9]+']);
});

//Route::controllers([  
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);