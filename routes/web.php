<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\DevisController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

URL::forceScheme('https');

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/mentions-legales', [MainController::class, 'legal'])->name('legal');
Route::post('/sendemail/send', [DevisController::class, 'send'])->name('sendmail');