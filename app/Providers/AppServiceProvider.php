<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('own-post', function (User $user, Post $post) {
            return $user->id === $post->user_id || $user->role === 'admin';
        });

        Gate::define('create-post', function (User $user) {
            return $user->role === 'admin' || $user->role === 'author';
        });
    }
}
