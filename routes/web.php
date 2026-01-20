<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ObjectifsController;
use App\Http\Controllers\ValeursController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\FounderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/mission', [MissionController::class, 'index'])->name('mission');
Route::get('/mot-du-fondateur', [FounderController::class, 'index'])->name('founder');
Route::get('/objectifs', [ObjectifsController::class, 'index'])->name('objectives');
Route::get('/valeurs', [ValeursController::class, 'index'])->name('valeurs');
Route::get('/programs', [ProgramsController::class, 'index'])->name('programs');
Route::get('/equipe-dirigeante', [TeamController::class, 'index'])->name('team');
Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/espace-parents', [ParentsController::class, 'index'])->name('parents');
Route::get('/espace-enseignants', [TeachersController::class, 'index'])->name('teachers');
Route::get('/mardi-gras', function () {
    return view('mardi-gras');
})->name('mardi-gras');
