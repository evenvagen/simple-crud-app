<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShortcutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('contacts', ContactController::class);

Route::resource('shortcuts', ShortcutController::class);

Route::get('cars', [CarController::class, 'index'])->name('cars.index');

Route::post('cars', [CarController::class, 'store'])->name('cars.store');

Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');

Route::delete('cars/{cars}', [CarController::class, 'destroy'])->name('cars.destroy');
