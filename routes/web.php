<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    return view('welcome');
});



// Login Routes...
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes...
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes...
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::prefix('company_category')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\CompanyCategoryController::class, 'add'])->name('company_category.add');
        Route::post('/save', [App\Http\Controllers\Backend\CompanyCategoryController::class, 'save'])->name('company_category.save');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\CompanyCategoryController::class, 'update'])->name('company_category.update');
    });

    Route::prefix('company')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\CompanyController::class, 'add'])->name('company.add');
        Route::post('/save', [App\Http\Controllers\Backend\CompanyController::class, 'save'])->name('company.save');
        Route::post('/edit', [App\Http\Controllers\Backend\CompanyController::class, 'edit'])->name('company.edit');
    });
    Route::prefix('event')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\EventTypeController::class, 'add'])->name('event.add');
    });
    Route::prefix('data')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\DataController::class, 'add'])->name('data.add');
    });
    
   
    
});




