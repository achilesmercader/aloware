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

Auth::routes();

Route::get('/', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::get('/comments', 'CommentController@index')->name('comments')->middleware('auth');
Route::post('/comments', 'CommentController@store');















Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
});

Route::group(['middleware' => 'auth'], function () {

        // Route::resource('posts','PostController');
        Route::get('/posts', 'PostController@index')->name('posts.index');
        Route::post('/posts', 'PostController@store')->name('posts.store');
        Route::get('/posts/create', 'PostController@create')->name('posts.create');
        Route::get('/posts/{post}', 'PostController@show')->name('posts.show'); //by default use ID, you can also change it to slug
        Route::patch('/posts/{post}', 'PostController@update')->name('posts.update');
        Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
        Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
        
        Route::post('/posts/{post}/comments', 'CommentController@store')->name('comments.store');
        Route::patch('/posts/{post}/comments/{comment}', 'CommentController@update')->name('comments.update');

        Route::post('/posts/{post}/invitations', 'CommentController@store');
        
});