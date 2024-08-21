<?php

use App\Http\Controllers\Admin\PokedexAdminController;
use App\Http\Controllers\PokedexUserController;
use App\Http\Controllers\AttackUserController;
use App\Http\Controllers\Admin\AttackAdminController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\Admin\TypeAdminController;
use App\Http\Controllers\ProfileController;
use App\Models\Attack;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PokedexUserController::class, 'index']);

Route::get('/pokemon', [PokedexUserController::class, 'index'])->name('front.pokedexuser.index');
Route::get('/pokemon/{id}', [PokedexUserController::class, 'show'])->name('front.pokedexuser.show');



Route::get('/attack', [AttackUserController::class, 'index'])->name('front.attackuser.index');
Route::get('/attack/{id}', [AttackUserController::class, 'show'])->name('front.attackuser.show');


Route::get('/type', [TypeUserController::class, 'index'])->name('front.typeuser.index');
Route::get('/type/{id}', [TypeUserController::class, 'show'])->name('front.typeuser.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('pokemon', PokedexAdminController::class);
});

require __DIR__.'/auth.php';
