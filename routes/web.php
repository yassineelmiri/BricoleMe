<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReservationController;

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


Route::get('/', function () {
    return view('index');
});
Route::get('/Admin-Dash', function () {
    return view('admin-dashboard');
});


Route::resource('client',ClientController::class);

Route::get('/auth/google',[\App\Http\Controllers\SocialMediaAuthController::class,'redirectToGoogle'])->name('auth.google');

Route::get('auth/facebook',[\App\Http\Controllers\SocialMediaAuthController::class,'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/social/register/artisan',[\App\Http\Controllers\SocialMediaAuthController::class,'socialArtisanRegister'])->name('auth.social.register.artisan');
Route::get('auth/social/register/customer',[\App\Http\Controllers\SocialMediaAuthController::class,'socialCustomerRegister'])->name('auth.social.register.customer');


Route::post('auth/social/register/customer',[\App\Http\Controllers\SocialMediaAuthController::class,'socialCustomerRegistration'])->name('auth.social.customer.register');

Route::post('/auth/social/artisan/register',[\App\Http\Controllers\SocialMediaAuthController::class,'socialArtisanRegistration']);
Route::get('/auth/google/user/data' ,[\App\Http\Controllers\SocialMediaAuthController::class,'handleGoogleResponse'])->name('auth.google.data');
Route::get('/auth/facebook/user/data' ,[\App\Http\Controllers\SocialMediaAuthController::class,'handleFacebookResponse'])->name('auth.facebook.data');

Route::get('/auth/register/type',[\App\Http\Controllers\SocialMediaAuthController::class,'registerRedirect'])->name('auth.register.redirect');

Route::post('/login',[\App\Http\Controllers\AuthenticationController::class,'login'])->name('login');
Route::get('/login',[\App\Http\Controllers\AuthenticationController::class,'loginPage'])->name('login.view');
Route::get('/register/artisan',[\App\Http\Controllers\AuthenticationController::class,'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer',[\App\Http\Controllers\AuthenticationController::class,'customerRegistrationPage'])->name('customer.register.view');
Route::post('/register/customer',[\App\Http\Controllers\AuthenticationController::class,'customerRegistration'])->name('customer.register');
Route::post('/auth/artisan/register',[\App\Http\Controllers\AuthenticationController::class,'artisanRegistration'])->name('artisan.register');




Route::get('/artisan/services',[\App\Http\Controllers\ArtisanController::class,'services'])->name('artisan.services');
Route::group(['middleware' => 'role:artisan'], function (){
    Route::get('/artisan/dashboard',function (){
        return view('artisan.index');
    })->name('artisan.dashboard');
});


Route::group(['middleware' => 'role:customer'],function (){
    Route::get('/customer/dashboard',function (){
        return view('client.index');
    })->name('customer.dashboard');
});





Route::get('/create-reservation', [ReservationController::class, 'create'])->name('create.reservation');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store.reservation');

