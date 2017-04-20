<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('publications', 'PostController@publications')->name('publications');
Route::get('publication/{id}', 'PostController@publication');

Route::get('projectList', 'ProjectController@index')->name('projectList');
Route::get('projectList/display/{project}', 'ProjectController@display');

Route::get('about', 'AboutController@index')->name('about');
Route::post('about', 'AboutController@sendEmail');

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // PROJECTS
    Route::get('projects', 'ProjectController@projects')->name('projects');
    Route::get('projects/create', 'ProjectController@create')->name('createProject');
    Route::post('projects/store', 'ProjectController@store');
    Route::get('projects/show/{project}', 'ProjectController@show')->name('showProject');
    Route::get('projects/{project}/edit', 'ProjectController@edit');
    Route::patch('projects/update', 'ProjectController@update');
    Route::delete('projects/delete', 'ProjectController@destroy');
    Route::get('projects/{project}/faqs', 'ProjectController@faqs')->name('faqs');
    Route::get('projects/{project}/faqs/create', 'ProjectController@createFaq')->name('createFaq');
    Route::post('projects/{project}/faqs/store', 'ProjectController@storeFaq');
    Route::get('projects/{project}/faqs/show/{faq}', 'ProjectController@showFaq')->name('showFaq');
    Route::delete('projects/{project}/faqs/delete', 'ProjectController@destroyFaq');
    Route::get('projects/{project}/faqs/{faq}/edit', 'ProjectController@editFaq');
    Route::patch('projects/{project}/faqs/update', 'ProjectController@updateFaq');

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
