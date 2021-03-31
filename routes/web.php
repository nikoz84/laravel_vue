<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\CanalController;

Route::get('/home', [SpaController::class, 'showIndex'])->name('web.home');
Route::get('/sobre', [SpaController::class, 'showSobre'])->name('web.sobre');
Route::get('/galeria', [SpaController::class, 'showGaleria'])->name('web.galeria');

Route::get('/admin/usuarios', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/{slug}', [CanalController::class, 'index'])->name('web.canal');

//Route::get('/{any}', [SpaController::class, 'index'])->where('any', '.*');
