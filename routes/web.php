<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('contacts', ContactController::class);

// Route::resource('cars', CarController::class);

Route::get('cars', [CarController::class, 'index'])->name('cars.index');

Route::post('cars', [CarController::class, 'store'])->name('cars.store');

Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
