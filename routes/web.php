<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Contact\ContactForm;
use App\Http\Livewire\Profile\ProfileForm;

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
Route::get("/", function () {
    return view("home");
})->name("welcome");

// Home page
Route::get('/home', function (){
    return view('home');
})->name('home');

/****************** Contact Start ******************/
// Contact page
Route::get("/contact", function () {
    return view("contact");
})->name("contact");

// Contact form submit
Route::get('/contact-submit', ContactForm::class)->name('contact-submit');
/****************** Contact End ******************/

// Set the language
Route::get("/setlanguage/{locale?}", [LocalizationController::class, 'setLanguage'])->name("setlanguage");

// Authentication routes
Auth::routes();

/****************** Profile Start ******************/
Route::middleware('auth')->group(function () {
    // Profile page
    Route::get('/profile', function (){
        return view('profile');
    })->name('profile');

    // Create post page
    Route::get('/create-post', ContactForm::class)->name('create-post');

    // Edit Profile 
    Route::get('/edit-profile', ProfileForm::class)->name('edit-profile');
});
/****************** Profile End ******************/