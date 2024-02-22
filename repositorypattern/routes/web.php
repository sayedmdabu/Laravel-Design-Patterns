<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/category', [CategoryController::class, 'index'])->name('category.list');
Route::get('/category-add', [CategoryController::class, 'view'])->name('category.add');
Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category-update', [CategoryController::class, 'update'])->name('category.update');

Route::any('/category-detele/{id}', [CategoryController::class, 'detele'])->name('category.detele');