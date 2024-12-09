<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');
Route::get('/details', [RegistrationController::class, 'showDetails'])->name('register.details');

// Route::get('/',[WelcomController::class,'welcome'])->name('welcome');
Route::get('/helloworld',[HelloController::class,'hello'])->name('welcome');

Route::get('/hello',function(){
    return "Hello";
});
