<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
// Root route

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/buddies', [HomeController::class, 'buddies'])->name('home.buddies');
Route::get('/buddy/{id}/detail', [HomeController::class, 'buddyDetails'])->name('home.buddyDetails');
Route::get('/booking/{id}/detail', [HomeController::class, 'bookingDetails'])->name('home.bookingDetails');

// Route::get('/blogs', [HomeController::class, 'blogs'])->name('home.blogs');
// Route::get('/blog/{id}/details', [HomeController::class, 'blogDetails'])->name('home.blogDetails');
