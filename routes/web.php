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
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

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
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\CompanyCategoryController::class, 'delete'])->name('company_category.delete');
    });

    Route::prefix('company')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\CompanyController::class, 'add'])->name('company.add');
        Route::post('/save', [App\Http\Controllers\Backend\CompanyController::class, 'save'])->name('company.save');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\CompanyController::class, 'edit'])->name('company.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\CompanyController::class, 'update'])->name('company.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\CompanyController::class, 'delete'])->name('company.delete');

    });
    Route::prefix('event')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\EventTypeController::class, 'add'])->name('event.add');
        Route::post('/save', [App\Http\Controllers\Backend\EventTypeController::class, 'save'])->name('event.save');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\EventTypeController::class, 'update'])->name('event.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\EventTypeController::class, 'delete'])->name('event.delete');
    });
    Route::prefix('data')->group(function () {
        Route::get('/index', [App\Http\Controllers\Backend\DataController::class, 'index'])->name('data.index');
        Route::get('/add', [App\Http\Controllers\Backend\DataController::class, 'add'])->name('data.add');
        Route::post('/save', [App\Http\Controllers\Backend\DataController::class, 'save'])->name('data.save');
        //upload by csv
        Route::post('/csv/upload', [App\Http\Controllers\Backend\DataController::class, 'csvUpload'])->name('data.csv.upload');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\DataController::class, 'edit'])->name('data.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\DataController::class, 'update'])->name('data.update');


        Route::get('/edit/{id}', [App\Http\Controllers\Backend\DataController::class, 'edit'])->name('data.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\DataController::class, 'update'])->name('data.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\DataController::class, 'delete'])->name('data.delete');
        Route::get('/toggle/{id}', [App\Http\Controllers\Backend\DataController::class, 'toggle'])->name('data.toggle');
    });

    Route::prefix('mailtemplate')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\MailTemplateController::class, 'add'])->name('mailtemplate.add');
        Route::post('/save', [App\Http\Controllers\Backend\MailTemplateController::class, 'save'])->name('mailtemplate.save');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\MailTemplateController::class, 'edit'])->name('mailtemplate.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\MailTemplateController::class, 'update'])->name('mailtemplate.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\MailTemplateController::class, 'delete'])->name('mailtemplate.delete');
    });

    Route::prefix('welcomemail')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\WelcomeMailController::class, 'add'])->name('welcomemail.add');
        Route::post('/save', [App\Http\Controllers\Backend\WelcomeMailController::class, 'save'])->name('welcomemail.save');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\WelcomeMailController::class, 'edit'])->name('welcomemail.edit');
        Route::post('/update', [App\Http\Controllers\Backend\WelcomeMailController::class, 'update'])->name('welcomemail.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\WelcomeMailController::class, 'delete'])->name('welcomemail.delete');
    });

    Route::prefix('quotemail')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\QuoteMailController::class, 'add'])->name('quotemail.add');
        Route::post('/save', [App\Http\Controllers\Backend\QuoteMailController::class, 'save'])->name('quotemail.save');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\QuoteMailController::class, 'edit'])->name('quotemail.edit');
        Route::post('/update', [App\Http\Controllers\Backend\QuoteMailController::class, 'update'])->name('quotemail.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\QuoteMailController::class, 'delete'])->name('welcomemail.delete');
    });

    Route::prefix('followupmail')->group(function () {
        Route::get('/add', [App\Http\Controllers\Backend\FollowUpMailController::class, 'add'])->name('followupmail.add');
        Route::post('/save', [App\Http\Controllers\Backend\FollowUpMailController::class, 'save'])->name('followupmail.save');
        Route::get('/edit/{id}', [App\Http\Controllers\Backend\FollowUpMailController::class, 'edit'])->name('followupmail.edit');
        Route::post('/update/{id}', [App\Http\Controllers\Backend\FollowUpMailController::class, 'update'])->name('followupmail.update');
        Route::get('/delete/{id}', [App\Http\Controllers\Backend\FollowUpMailController::class, 'delete'])->name('followupmail.delete');
    });
    Route::prefix('sendmail')->group(function () {
        Route::get('/followupmail', [App\Http\Controllers\Backend\MailSendController::class, 'followupmail'])->name('sendmail.followupmail');

    });



});




