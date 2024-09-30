<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/{id}', [FoodController::class, 'show'])->name('food');
Route::get('/food/edit/{store}', [FoodController::class, 'edit'])->name('edit');
Route::put('/food/update/{id}', [FoodController::class, 'update'])->name('food.update');
Route::get('/', [StoreController::class, 'index']);
Route::get('/create', [StoreController::class, 'create'])->name('create');
Route::post('/store', [StoreController::class, 'store'])->name('stores.store');
Route::get('/stores', [StoreController::class, 'index'])->name('index');
Route::get('/edit/{store}', [StoreController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [StoreController::class, 'update'])->name('update');
