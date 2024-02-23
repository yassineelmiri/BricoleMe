<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthenticationController;

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('index');
// });

// Route::resource('client',ClientController::class);


// Route::get('/login',[\App\Http\Controllers\AuthenticationController::class,'loginPage'])->name('login.view');
Route::get('/register/artisan',[\App\Http\Controllers\AuthenticationController::class,'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer',[\App\Http\Controllers\AuthenticationController::class,'customerRegistrationPage'])->name('customer.register.view');



