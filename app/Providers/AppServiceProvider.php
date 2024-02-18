<?php

namespace App\Providers;

use App\Models\Admin\BlogModule\BlogCategory;
use App\Models\Admin\CourseModule\CourseCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);

        View::composer('front.includes.header', function ($view){
            $view->with([
                'courseCategories'  => CourseCategory::where('status', 1)->get(),
                'blogCategories'    => BlogCategory::where('status', 1)->get()
            ]);
        });
    }
}
