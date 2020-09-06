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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ログイン状態

Route::group(['middleware' => 'auth'], function() {


    Route::resource('users', 'UsersController', ['onyl' => ['index', 'show', 'edit', 'update']]);

    // フォロー・フォロー解除
    Route::post('users/{id}/follow', 'UsersController@follow')->name('follow');
    Route::delete('users/{id}/unfollow', 'UsersController@unfollow')->name('unfollow');


    Route::resource('tweets', 'TweetsController', );

    Route::resource('comments', 'CommentsController', ['only' => ['store']]);

});
