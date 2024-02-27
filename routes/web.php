<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\SocialMediaAuthController;
use App\Http\Controllers\TestController;

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReservationController;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\InvoiceController;



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

})->name('home');
Route::get('/Admin-Dash', function () {
    return view('admin-dashboard');
});


Route::get('/Admin-stats', function () {
    return view('admin-dashboard.admin-statestiques');
})->name('admin.stats');

Route::get('/Admin-requests', function () {
    return view('admin-dashboard.admin-requests');
})->name('admin.requests');

Route::get('/Admin-claims', function () {
    return view('admin-dashboard.admin-claims');
})->name('admin.claims');


Route::get('/artisan/detail', [TestController::class, 'index'])->name('artisan.detail');

Route::resource('client', ClientController::class);
Route::resource('artisan', ArtisanController::class);


// 
Route::group(['middleware' => 'role:artisan'], function (){
    Route::get('/ART',function (){
        return to_route('show.artisan');
    })->name('artisan.dashboard');
});
// 

Route::get('/profission{id}', [TestController::class, 'test'])->name('show.profession');
Route::get('/ART', [TestController::class, 'artisan'])->name('show.artisan');
Route::get('/CLT', [TestController::class, 'client'])->name('show.client');
Route::get('/edit', [TestController::class, 'edit'])->name('edit.artisan');


Route::get('/login', [AuthenticationController::class, 'loginPage'])->name('login.view');
Route::get('/register/artisan', [AuthenticationController::class, 'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer', [AuthenticationController::class, 'customerRegistrationPage'])->name('customer.register.view');
Route::post('/auth/artisan/register', [AuthenticationController::class, 'artisanRegistration'])->name('artisan.register');

Route::post('/create-reservation', [ReservationController::class, 'create'])->name('create.reservation');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store.reservation');

// Mohammed Joual la dernier Version 
Route::get('/auth/google',[SocialMediaAuthController::class,'redirectToGoogle'])->name('auth.google');

Route::get('auth/facebook',[SocialMediaAuthController::class,'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/social/register/artisan',[SocialMediaAuthController::class,'socialArtisanRegister'])->name('auth.social.register.artisan');
Route::get('auth/social/register/customer',[SocialMediaAuthController::class,'socialCustomerRegister'])->name('auth.social.register.customer');


Route::post('auth/social/register/customer',[SocialMediaAuthController::class,'socialCustomerRegistration'])->name('auth.social.customer.register');

Route::post('/auth/social/artisan/register',[SocialMediaAuthController::class,'socialArtisanRegistration']);
Route::get('/auth/google/user/data' ,[SocialMediaAuthController::class,'handleGoogleResponse'])->name('auth.google.data');
Route::get('/auth/facebook/user/data' ,[SocialMediaAuthController::class,'handleFacebookResponse'])->name('auth.facebook.data');

Route::get('/auth/register/type',[SocialMediaAuthController::class,'registerRedirect'])->name('auth.register.redirect');

Route::post('/login',[AuthenticationController::class,'login'])->name('login');
Route::get('/log-out',[AuthenticationController::class,'logout'])->name('log-out');

Route::get('/login',[AuthenticationController::class,'loginPage'])->name('login.view');
Route::get('/register/artisan',[AuthenticationController::class,'artisanRegistrationPage'])->name('artisan.register.view');
Route::get('/register/customer',[AuthenticationController::class,'customerRegistrationPage'])->name('customer.register.view');
Route::post('/register/customer',[AuthenticationController::class,'customerRegistration'])->name('customer.register');
Route::post('/auth/artisan/register',[AuthenticationController::class,'artisanRegistration'])->name('artisan.register');




Route::get('/artisan/services',[ArtisanController::class,'services'])->name('artisan.services');



Route::group(['middleware' => 'role:customer'],function (){
    Route::get('/CLT',function (){
       
        return view('client.client');
    })->name('customer.dashboard');
});





Route::get('/create-reservation', [ReservationController::class, 'create'])->name('create.reservation');
Route::post('/store-reservation', [ReservationController::class, 'store'])->name('store.reservation');



Route::get('/invoice', [InvoiceController::class, 'generate']);


