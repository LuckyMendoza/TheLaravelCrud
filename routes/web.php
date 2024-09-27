<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------         z z        sssssx aZX
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home 
Route::view('/home', function(){
    return view('layout.home');
} );



//LOGIN REGISTER CONTROLLER
Route::controller(LoginRegisterController::class)->group(function(){
    Route::get('/register', 'register' )->name('register');
    Route::post('/store', 'store' )->name('store');
    Route::get('/login', 'login' )->name('login');
    Route::get('/authenticate', 'authenticate' )->name('authenticate');
    // Route::get('/home', 'home' )->name('home');
    Route::get('/logout', 'logout' )->name('logout');

});

//define verification email
Route::controller(VerificationController::class)->group(function(){
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify{id}/{hash}', 'verify')->name('verification.veify');
    Route::get('/email/resend', 'resend')->name('verification.resend');

});

//STUDENT ROUTE                                                                                                                                                                                  
Route::controller(StudentController::class)->group(function(){
    Route::get('/', 'index')->name('student.index');
    Route::post('/student-store','store')->name('student.store'); 
    Route::get('/student-create','create')->name('student.create');
    Route::get('/student-show/{student}', 'show')->name('student.show');
    Route::delete('/student-delete/{student}',  'destroy')->name('student.delete');
    Route::get('/student-edit/{student}', 'edit')->name('student.edit');
    Route::put('/student-update/{student}',  'update')->name('student.update');
});