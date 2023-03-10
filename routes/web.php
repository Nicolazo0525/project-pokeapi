<?php

use App\Http\Controllers\Api\PokemonController;
use App\Http\Controllers\Api\ViewCharacterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Route::get('index-pokemon', function () {
    return Inertia::render('IndexPokemon');
})->middleware(['auth', 'verified'])->name('index-pokemon'); */
Route::get('index-pokemon', [PokemonController::class, 'index'])->name('index-pokemon');
Route::get('info-character/{id}', [ViewCharacterController::class, 'show'])->name('info-character');

/* Route::group(['prefix' => 'u'], function () {
    Route::inertia('/index-pokemon', 'IndexPokemon')->name('index-pokemon');
});
 */
require __DIR__.'/auth.php';
