<?php

namespace App\Providers;

// https://github.com/laravel/framework/issues/17508
// https://github.com/laravel/docs/blob/5.4/migrations.md#index-lengths--mysql--mariadb
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://github.com/laravel/framework/issues/17508
        // https://github.com/laravel/docs/blob/5.4/migrations.md#index-lengths--mysql--mariadb
        Schema::defaultStringLength(191);

        app('view')->composer(['partials.nav', 'partials.menu', 'partials.projects.tab', 'user.tab', 'event.tab'], function($view) {
            $action = app('request')->route()->getAction();
            $controller = class_basename($action['controller']);

            list($controller, $action) = explode('@', $controller);

            $view->with(compact('controller', 'action'));
        });

        app('view')->composer('partials.tags', function($view) {
            $view->with('tags', \App\Tag::orderBy('name', 'asc')->get());
        });

        app('view')->composer('post.tags', function($view) {
            $view->with('tags', \App\Tag::orderBy('name', 'asc')->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
