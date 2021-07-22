<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('list')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('list.home');
    Route::get('/create', [HomeController::class, 'create'])->name('list.create');
    Route::post('/create', [HomeController::class, 'store'])->name('list.store');
    Route::get('/{id}/delete', [HomeController::class, 'delete'])->name('list.delete');
    Route::get('/{id}/edit', [HomeController::class, 'edit'])->name('list.edit');
    Route::post('/{id}/edit', [HomeController::class, 'update'])->name('list.update');
    Route::get('/search', [HomeController::class, 'search'])->name('list.search');
});
