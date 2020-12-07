<?php

use App\Http\Middleware\TweetfindMiddleware;
use App\Http\Middleware\TweetsallMiddleware;
use App\Http\Middleware\TweetsaveMiddleware;
use App\Http\Middleware\MovetoindexMiddleware;

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


Route::get('/','TweetsController@index')
    ->middleware(TweetsallMiddleware::class);

Route::get('tweets','TweetsController@index')
    ->middleware(TweetsallMiddleware::class);

Route::get('tweets/new','TweetsController@new')
    ->middleware(MovetoindexMiddleware::class);

Route::post('tweets/new','TweetsController@create');

Route::post('/tweets/delete/{id}','TweetsController@delete');

Route::get('/tweets/edit/{id}', 'TweetsController@edit')
    ->middleware(TweetfindMiddleware::class)
    ->middleware(MovetoindexMiddleware::class);

Route::post('/tweets/edit/{id}', 'TweetsController@update');

Route::get('/tweets/show/{id}', 'TweetsController@show')
    ->middleware(TweetfindMiddleware::class);

Route::get('/tweets/show/user/{id}','TweetsController@user_show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
