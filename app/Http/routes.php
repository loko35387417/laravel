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

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::guest('user/login');
});

//home
Route::get('/', ['as' => 'home', 'uses' => 'SiteController@index']);

Route::group(['before' => 'auth', 'prefix' => '/'], function(){
    Route::get('about', ['as' => 'about', 'uses' => 'SiteController@about']);    
});

Route::group(['before' => 'auth', 'prefix' => 'article', 'namespace' => 'article'], function(){
    Route::get('create', 'ArticleController@create');
    Route::get('destory/{id}', 'ArticleController@destroy');
    Route::get('edit/{id}', 'ArticleController@edit');
    Route::post('update/{id}', 'ArticleController@update');
    Route::post('/store', 'ArticleController@store');
    Route::get('/', ['as' => 'lists', 'uses' => 'ArticleController@index']);
    Route::get('/{id}', ['as' => 'single', 'uses' => 'ArticleController@show'])->where(['id' => '[0-9]+']);
});

//Route::controller('user', 'UserController');
Route::group(['prefix' => 'user'], function(){
    Route::get('login', 'UserController@login');
    Route::post('access', 'UserController@access');
    Route::get('logout', 'UserController@logout');
    Route::get('register', 'UserController@register');
    Route::post('store', 'UserController@store');
    Route::get('remotecheck','UserController@remoteCheck');
});

Route::controllers([  
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);