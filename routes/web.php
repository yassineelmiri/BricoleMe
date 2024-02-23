<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login',[\App\Http\Controllers\AuthenticationController::class,'loginPage'])->name('login.view');
Route::get('/register/artisan',[\App\Http\Controllers\AuthenticationController::class,'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer',[\App\Http\Controllers\AuthenticationController::class,'customerRegistrationPage'])->name('customer.register.view');
Route::post('/auth/artisan/register',[\App\Http\Controllers\AuthenticationController::class,'artisanRegistration'])->name('artisan.register');



