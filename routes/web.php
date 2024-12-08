<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------    -------------------------------------------------------      
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
// Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');


Route::view('/', 'home')->name('home');

//LOGIN REGISTER CONTROLLER
Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/home', 'home' )->name('home');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/google/redirect', 'redirectToGoogle')->name('google.redirect');
    Route::get('/google/callback ', 'handleGoogleCallback')->name('google.callback');
});

//define verification email
Route::controller(VerificationController::class)->group(function () {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::post('/email/verify', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});

//STUDENT ROUTE                                                                                                                                                                                  
Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'index')->name('student.index');
    Route::post('/student-store', 'store')->name('student.store');
    Route::get('/student-create', 'create')->name('student.create');
    Route::get('/student-show/{student}', 'show')->name('student.show');
    Route::delete('/student-delete/{student}',  'destroy')->name('student.delete');
    Route::get('/student-edit/{student}', 'edit')->name('student.edit');
    Route::put('/student-update/{student}',  'update')->name('student.update');
    Route::get('/student-search', 'search')->name('student.search');
});

// Forgot Password Routes
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('/forgot-password', 'showLinkRequestForm')->name('password.request');
    Route::post('/forgot-password', 'sendResetLinkEmail')->name('password.email');
});

// Reset Password Routes
Route::controller(ResetPasswordController::class)->group(function () {
    Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');
});
