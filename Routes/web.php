<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\Persona\Http\Controllers\Web\UserConfirmPasswordController;
use Modules\Persona\Http\Controllers\Web\UserForgotPasswordController;
use Modules\Persona\Http\Controllers\Web\UserHomeController;
use Modules\Persona\Http\Controllers\Web\UserLoginController;
use Modules\Persona\Http\Controllers\Web\UserRegisterController;
use Modules\Persona\Http\Controllers\Web\UserResetPasswordController;
use Modules\Persona\Http\Controllers\Web\UserVerificationController;
use Modules\Persona\Http\Controllers\Web\WelcomeController;

/* |--------------------------------------------------------------------------
   | Authentication Routes
   |--------------------------------------------------------------------------
   | this override authentication routes of default app web guard
   | names of routes is the same as the default web auth routes
*/


/* override default web auth routes */

Route::group([
    'prefix'=> '/'

],function (){
    /* welcome */
    Route::get('/', WelcomeController::class);

    /* home */
    Route::get('home', [UserHomeController::class, 'index'])->name('home')->middleware('auth','verified');

    /* login */
    Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
    Route::post('login', [UserLoginController::class, 'login'])->middleware('guest');
    Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');

    /* register */
    Route::get('register', [UserRegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
    Route::post('register', [UserRegisterController::class, 'register'])->middleware('guest');

    /* password-confirm */
    Route::get('password/confirm', [UserConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm')->middleware('auth');
    Route::post('password/confirm', [UserConfirmPasswordController::class, 'confirm'])->middleware('auth');

    /* password-forgot */
    Route::post('password/email', [UserForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset', [UserForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

    /* password-reset */
    Route::get('password/reset/{token}', [UserResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [UserResetPasswordController::class, 'reset'])->name('password.update');

    /* verify-email */
    Route::get('email/verify', [UserVerificationController::class, 'show'])->name('verification.notice')->middleware('auth');
    Route::get('email/verify/{id}/{hash}', [UserVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth','signed','throttle:6,1');
    Route::post('email/verify/resend', [UserVerificationController::class,'resend'])->name('verification.resend')->middleware('auth','throttle:6,1');
});
