<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/kos', [KosController::class, 'index'])->name('kos.index');
// Route::get('/kos/create', [KosController::class, 'create'])->name('kos.create');
// Route::post('/kos', [KosController::class, 'store'])->name('kos.store');
// Route::delete('/kos/{id}', [KosController::class, 'destroy'])->name('kos.destroy');
// Route::get('/kos/{id}', [KosController::class, 'show'])->name('kos.show');
// Route::get('/kos/{id}/edit', [KosController::class, 'edit'])->name('kos.edit');
// Route::put('/kos/{id}', [KosController::class, 'update'])->name('kos.update');
