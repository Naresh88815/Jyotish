<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth')->group(function () {
  
});

Route::get('/', function () {
    return view('/layouts/home');
});

Route::get('/layouts/home', function () {
    return view('home');
});

// Route to show registration form
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showloginform');

// Handle login form submission
Route::post('/login', [LoginController::class, 'login.post']);
// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Show Home Page
Route::get('/home',[HomeController::class,'showHomePage']) ->name('showHomePage');
