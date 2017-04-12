<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('publications', 'PostController@publications')->name('publications');

Route::get('project', 'ProjectController@index')->name('project');

Route::get('about', 'AboutController@index')->name('about');
Route::post('about', 'AboutController@sendEmail');

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // POSTS
    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('posts/create', 'PostController@create');
    Route::post('posts/store', 'PostController@store');
    Route::get('posts/show/{id}', 'PostController@show');
    Route::get('posts/{id}/edit', 'PostController@edit');
    Route::patch('posts/update', 'PostController@update')->name('editPost');
    Route::delete('posts/delete', 'PostController@destroy');

    // TAGS
    Route::get('tags', 'TagController@index')->name('tags');
    Route::get('tags/create', 'TagController@create')->name('createTag');
    Route::post('tags', 'TagController@store');
    Route::get('tags/{tag}/edit', 'TagController@edit')->name('editTag');
    Route::patch('tags/update', 'TagController@update');
    Route::delete('tags/delete', 'TagController@destroy');
});
