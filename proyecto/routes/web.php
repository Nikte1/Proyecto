<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductoController;

/* -------------------------
|   Rutas del menú principal
-------------------------- */

Route::get('/', [MenuController::class, 'dashboard'])->name('dashboard');
Route::get('/posts', [MenuController::class, 'posts'])->name('posts');
Route::get('/media', [MenuController::class, 'media'])->name('media');
Route::get('/pages', [MenuController::class, 'pages'])->name('pages');
Route::get('/settings', [MenuController::class, 'settings'])->name('settings');

/* -------------------------
|   CRUD de productos
-------------------------- */

Route::resource('productos', ProductoController::class);
