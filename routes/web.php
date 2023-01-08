<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'greeting' => 'Hello',
    ]);
})->name('welcome');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/game', [GameController::class, 'index'])->name('game');