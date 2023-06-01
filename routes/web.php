<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('about.page');
Route::get('courses', [HomeController::class, 'courses'])->name('courses.page');
Route::get('contact-us', [HomeController::class, 'contact'])->name('contact.page');
Route::get('enrollment', [EnrollmentController::class, 'enrollment'])->name('enrollment');
Route::post('enrollment', [EnrollmentController::class, 'post_enrollment'])->name('post_enrollment');

Route::get('certificate', [CourseController::class, 'certificate'])->name('certificate.form');
Route::post('verify-certificate', [CourseController::class, 'verify_certificate'])->name('verify-certificate');


Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect()->back()->with('success','Cache cleared successfully!');
});
