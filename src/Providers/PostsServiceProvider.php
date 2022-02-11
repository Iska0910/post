<?php

namespace Packages\Post\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Post\Console\Commands\PostCommand;

class PostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        dd('1');
        $this->loadRoutesFrom(__DIR__ . '/../routes/posts.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'posts');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');

        $this->publishes([
           __DIR__ . '/../resources/views'  =>  resource_path('views/vendor/posts'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class,
            ]);
        }
    }
}
