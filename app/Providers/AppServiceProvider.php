<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
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
        view()->composer('portfolio.layouts.app', function ($view) {
            $view->with([
                'globalServices' => Service::where(['status' => 1, 'deleted_at' => null])->get(),
                'globalCategories' => Category::all()]);
        });

        view()->composer('blog.blogs', function ($view) {
            $view->with([
                'globalCategories' => Category::all()]);
        });

    }
}
