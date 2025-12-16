<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home page
Route::get('/', [PageController::class, 'home'])->name('home');

// About Us
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');

// Services
Route::get('/layanan', [PageController::class, 'services'])->name('services');

// How It Works
Route::get('/alur-kerja', [PageController::class, 'howItWorks'])->name('how-it-works');

// Contact
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
