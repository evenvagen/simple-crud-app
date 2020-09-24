<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('contacts/create');
});

Route::apiResource('contacts', ContactController::class);
