<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('posts', 'PostController@index')->name('posts');

Route::get('project', 'ProjectController@index')->name('project');

Route::get('about', 'AboutController@index')->name('about');
Route::post('about', 'AboutController@sendEmail');

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
