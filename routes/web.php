<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

// Landing Page
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/news/{articles_news:slug}', [FrontController::class, 'news'])->name('front.news');
Route::get('/literatures/{literatues:slug}', [FrontController::class, 'literatures'])->name('front.literatures');
Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');

// Feedback / Curhatan Mahasiswa
Route::get('/curhatan-mahasiswa', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/curhatan-mahasiswa', [FeedbackController::class, 'create'])->name('feedback.create');