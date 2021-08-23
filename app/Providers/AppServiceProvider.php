<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Donation;
use App\Models\Post;
use App\Models\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            $causesCount = Request::count();
            $postsCount = Post::count();
            $donationsCount = Donation::count();
            $adminsCount = User::count();

            $categories = Category::withCount('requests')->get();

            $latest_posts = Post::with('image')->latest()->take(4)->get();

            $view->with([
                'categories' => $categories,
                'latest_posts' => $latest_posts,
                'adminsCount' => $adminsCount,
                'donationsCount' => $donationsCount,
                'postsCount' => $postsCount,
                'causesCount' => $causesCount,
            ]);

        });
    }
}
