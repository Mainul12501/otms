<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\OTMSController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\StudentController;

Route::get('/', [OTMSController::class, 'home'])->name('home');
Route::get('/course-category/{category_id}/{name?}', [OTMSController::class, 'courseCategory'])->name('course-category');
Route::get('/course-details/{course_id}/{title?}', [OTMSController::class, 'courseDetails'])->name('course-details');

Route::post('/add-to-cart/{course_id}', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('/show-cart-items', [CartController::class, 'showCartItems'])->name('show-cart-items');
Route::get('/delete-cart-item/{item_id}', [CartController::class, 'deleteCartItem'])->name('delete-cart-item');
Route::post('/update-cart-item/{item_id}', [CartController::class, 'updateCartItem'])->name('update-cart-item');

Route::get('/blog-category', [OTMSController::class, 'blogCategory'])->name('blog-category');
Route::get('/blog-details', [OTMSController::class, 'blogDetails'])->name('blog-details');
Route::get('/about-us', [OTMSController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-page', [OTMSController::class, 'contactPage'])->name('contact-page');



Route::get('/order-checkout', [PaymentController::class, 'checkout'])->name('order-checkout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('student')->group(function () {
        Route::get('dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
        Route::get('my-orders', [StudentController::class, 'myOrders'])->name('my-orders');
        Route::get('my-courses', [StudentController::class, 'myCourses'])->name('my-courses');
        Route::get('show-course-contents/{courseId}', [StudentController::class, 'showCourseContents'])->name('show-course-contents');
        Route::get('course-content-show/{courseContentId}', [StudentController::class, 'courseContentShow'])->name('course-content-show');
    });
});

Route::post('sslcommerz/success',[PaymentController::class, 'success'])->name('payment.success');
Route::post('sslcommerz/failure',[PaymentController::class, 'failure'])->name('payment.failure');
Route::post('sslcommerz/cancel',[PaymentController::class, 'cancel'])->name('payment.cancel');
Route::post('sslcommerz/ipn',[PaymentController::class, 'ipn'])->name('payment.ipn');
