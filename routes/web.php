<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Contact\ContactForm;
use App\Http\Livewire\Profile\ProfileForm;
use App\Http\Livewire\Profile\ChangePassword;
use App\Http\Livewire\Admin\AdminLogin;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Welcome page
Route::get("/", [HomeController::class, 'index'])->name("welcome");

// Home page
Route::get("/home", [HomeController::class, 'index'])->name("home");

// Set the language
Route::get("/setlanguage/{locale?}", [LocalizationController::class, 'setLanguage'])->name("setlanguage");


/****************** Contact ******************/

// Contact page
Route::get("/contact", function () {
    return view("contact");
})->name("contact");

// Contact form submit
Route::get('/contact-submit', ContactForm::class)->name('contact-submit');


/****************** Admin ******************/
// TODO: Add middleware to guard admin routes

// Admin login page
Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('admin.login');

// Admin login submit
Route::post('/admin-login', [AdminLoginController::class, 'authenticate'])->name('admin.login.submit');

// Admin Routes
Route::middleware('auth:admin')->group(function () {   
    // Admin login page
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // Admin logout submit
    Route::post('/admin-logout', [AdminLoginController::class, 'logout'])->name('admin.logout.submit');
});


/****************** Profile ******************/

// Authentication routes for users
Auth::routes();

Route::middleware('auth')->group(function () {
    // Profile page
    Route::get('/profile', function (){
        return view('profile');
    })->name('profile');

    // Create post page
    Route::get('/create-post', ContactForm::class)->name('create-post');

    // Edit Profile 
    Route::get('/edit-profile', ProfileForm::class)->name('edit-profile');
 
    // Change Password - GET
    Route::get('/profile/change-password', ChangePassword::class)->name('change-password');

    // Change Password - POST
    Route::post('/profile/change-password', ChangePassword::class)->name('change-password');
});
