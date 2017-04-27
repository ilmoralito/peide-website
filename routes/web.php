<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('events/{slug}', 'EventController@display');

Route::get('publications', 'PostController@publications')->name('publications');
Route::get('publication/{id}', 'PostController@publication');

Route::get('projectList', 'ProjectController@index')->name('projectList');
Route::get('projects/{slug}', 'ProjectController@display');

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

    // PROJECTS FAQS
    Route::get('projects/{project}/faqs', 'ProjectController@faqs')->name('faqs');
    Route::get('projects/{project}/faqs/create', 'ProjectController@createFaq')->name('createFaq');
    Route::post('projects/{project}/faqs/store', 'ProjectController@storeFaq');
    Route::get('projects/{project}/faqs/show/{faq}', 'ProjectController@showFaq')->name('showFaq');
    Route::delete('projects/{project}/faqs/delete', 'ProjectController@destroyFaq');
    Route::get('projects/{project}/faqs/{faq}/edit', 'ProjectController@editFaq');
    Route::patch('projects/{project}/faqs/update', 'ProjectController@updateFaq');

    // PROJECTS PHOTOS
    Route::get('projects/{project}/photos', 'ProjectController@photos')->name('photos');
    Route::post('projects/{project}/photos/store', 'ProjectController@storePhoto');
    Route::delete('projects/{project}/photos/delete', 'ProjectController@destroyPhoto');

    // EVENTS
    Route::get('events', 'EventController@index')->name('events');
    Route::get('events/create', 'EventController@create');
    Route::post('events/store', 'EventController@store');
    Route::get('events/show/{event}', 'EventController@show');
    Route::get('events/{event}/edit', 'EventController@edit');
    Route::patch('events/update', 'EventController@update');
    Route::delete('events/delete', 'EventController@destroy');

    // EVENT FAQS
    Route::get('events/{event}/faqs', 'EventController@faqs')->name('eventFaqs');
    Route::get('events/{event}/faqs/create', 'EventController@createFaq');
    Route::post('events/{event}/faqs/store', 'EventController@storeFaq');
    Route::get('events/{event}/faqs/show/{faq}', 'EventController@showFaq');
    Route::get('events/{event}/faqs/{faq}/edit', 'EventController@editFaq');
    Route::patch('events/{event}/faqs/update', 'EventController@updateFaq');
    Route::delete('events/{event}/faqs/delete', 'EventController@destroyFaq');

    // EVENT SCHEDULES
    Route::get('events/{event}/schedules', 'EventController@schedules')->name('schedules');
    Route::get('events/{event}/schedules/create', 'EventController@createSchedule');
    Route::post('events/{event}/schedules/store', 'EventController@storeSchedule');

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

    // USER
    Route::get('user/edit', 'UserController@edit');
    Route::patch('user/update', 'UserController@update');
    Route::get('user/password', 'UserController@password');
    Route::patch('user/password/update', 'UserController@updatePassword');
    Route::get('user/avatar', 'UserController@avatar');
    Route::post('user/avatar/store', 'UserController@storeAvatar');
});
