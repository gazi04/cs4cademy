<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::controller(LoginController::class)->name('auth.')->group(function () {
    Route::get("/logout", "logout");
    Route::get("/login", "index")->name('login');
    Route::post("/login", "authenticate");
});

Route::get('/', function () {
    return view('welcome');
});
