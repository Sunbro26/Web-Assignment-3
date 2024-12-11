<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LunchBoxController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestimonialController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [TestimonialController::class, 'about'])->name('about');
Route::get('/services', [LunchBoxController::class, 'services'])->name('services');
Route::view('/register', 'register')->name('register');
Route::view('/contact', 'contact')->name('contact');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');