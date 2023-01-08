<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\MirRevController;

Route::get('/',         [MirRevController::class, 'index'])->name('index');
Route::get('/game',     [MirRevController::class, 'game'])->name('game');
Route::get('/link',     [MirRevController::class, 'link'])->name('link');
Route::get('/profile',  [MirRevController::class, 'profile'])->name('profile');