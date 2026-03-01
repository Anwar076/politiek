<?php

use App\Http\Controllers\Admin\ContactMessageController as AdminContactMessageController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DonationController as AdminDonationController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\VolunteerController as AdminVolunteerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

// Redirect voor auth middleware (verwacht route 'login')
Route::get('/login', fn () => redirect()->route('admin.login'))->name('login');

// Frontend
Route::get('/', HomeController::class)->name('home');
Route::get('/nieuws', [PostController::class, 'index'])->name('news.index');
Route::get('/nieuws/{slug}', [PostController::class, 'show'])->name('news.show');
Route::get('/agenda', [EventController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{slug}', [EventController::class, 'show'])->name('agenda.show');
Route::get('/over-ons', [PageController::class, 'about'])->name('about');
Route::get('/standpunten', [PageController::class, 'standpunten'])->name('standpunten');
Route::get('/programma', [PageController::class, 'programma'])->name('programma');
Route::get('/kandidaten', [PageController::class, 'kandidaten'])->name('kandidaten');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/steun-ons', [DonationController::class, 'index'])->name('donate');
Route::post('/steun-ons', [DonationController::class, 'store'])->name('donate.store');
Route::get('/steun-ons/bedankt/{donation}', [DonationController::class, 'return'])->name('donate.return');
Route::post('/steun-ons/webhook', [DonationController::class, 'webhook'])->name('donate.webhook');
Route::get('/vrijwilliger', [VolunteerController::class, 'index'])->name('volunteer');
Route::post('/vrijwilliger', [VolunteerController::class, 'store'])->name('volunteer.store');

// Admin / CMS
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', AdminDashboardController::class)->name('dashboard');
        Route::resource('posts', AdminPostController::class)->except('show');
        Route::resource('events', AdminEventController::class)->except('show');
        Route::get('donations', [AdminDonationController::class, 'index'])->name('donations.index');
        Route::get('volunteers', [AdminVolunteerController::class, 'index'])->name('volunteers.index');
        Route::post('volunteers/{volunteer}/processed', [AdminVolunteerController::class, 'markProcessed'])->name('volunteers.markProcessed');
        Route::get('contact-messages', [AdminContactMessageController::class, 'index'])->name('contact-messages.index');
        Route::post('contact-messages/{contact}/mark-unread', [AdminContactMessageController::class, 'markUnread'])->name('contact-messages.mark-unread');
    });
});
