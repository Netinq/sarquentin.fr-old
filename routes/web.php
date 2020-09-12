<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/mentions-legales', [MainController::class, 'legal'])->name('legal');
