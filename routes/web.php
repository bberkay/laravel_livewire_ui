<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\ContactForm;

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

// Contact page
Route::get("/contact", function () {
    return view("contact");
})->name("contact");

// Contact form submit
Route::get('/contact-submit', ContactForm::class)->name('contact-submit');

// Set the language
Route::get("/setlanguage/{locale?}", [LocalizationController::class, 'setLanguage'])->name("setlanguage");

// Authentication routes
Auth::routes();

// Home page
Route::get('/home', function (){
    return view('home');
})->name('home');
