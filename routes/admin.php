<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\CourseModule\CourseCategoryController;
use App\Http\Controllers\Admin\CourseModule\CourseController;
use App\Http\Controllers\Admin\UserModule\UserController;
use App\Http\Controllers\Admin\BlogModule\BlogCategoryController;
use App\Http\Controllers\Admin\BlogModule\BlogController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\CourseModule\CourseContentController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::prefix('admin')->group(function (){
        Route::resource('course-categories', CourseCategoryController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('users', UserController::class);
        Route::resource('course-contents', CourseContentController::class);

        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/change-status-page/{id}', [OrderController::class, 'changeStatusPage'])->name('orders.change-status');
        Route::post('/update-order-status/{id}', [OrderController::class, 'updateOrderStatus'])->name('orders.update-status');
    });
    Route::prefix('admin')->name('admin.')->group(function (){
        Route::resources([
            'blog-categories'   => BlogCategoryController::class,
            'blogs'             => BlogController::class,
        ]);
    });


});
