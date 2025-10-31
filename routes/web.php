<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Routes pour le Groupe Scolaire Dubass
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/fondateurs', [HomeController::class, 'founders'])->name('founders');
Route::get('/programmes', [HomeController::class, 'programs'])->name('programs');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');
Route::get('/equipe', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/connexion', [HomeController::class, 'login'])->name('login');

// Routes anciennes conservées pour compatibilité
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/program', [HomeController::class, 'program'])->name('program');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/404', [HomeController::class, 'page404'])->name('page404');
