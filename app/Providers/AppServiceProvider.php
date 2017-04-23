<?php

namespace App\Providers;

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
        app('view')->composer(['partials.nav', 'partials.menu', 'partials.projects.tab', 'user.tab'], function($view) {
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
