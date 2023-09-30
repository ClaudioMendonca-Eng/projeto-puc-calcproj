<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpresaSistemaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index' ])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create' ])->name('users.create');
    Route::post('/users', [UserController::class, 'store' ])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show' ])->name('users.show');

    Route::get('/empresa', [App\Http\Controllers\EmpresaSistemaController::class, 'index'])->name('empresa.index');
    Route::post('/empresa', [App\Http\Controllers\EmpresaSistemaController::class, 'store'])->name('empresa.store');
    Route::get('/empresa/{id}/edit', [App\Http\Controllers\EmpresaSistemaController::class, 'edit'])->name('empresa.edit');
    Route::put('/empresa/{id}', [App\Http\Controllers\EmpresaSistemaController::class, 'update'])->name('empresa.update');


});



require __DIR__.'/auth.php';
